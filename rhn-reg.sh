#!/bin/bash

echo "###### Script to register production box with the correct spacewalk proxy server"
echo ""
echo ""

# read in the config.sh file to grap the mtype

source /tmp/config.sh

cluster=`hostname |awk -F"." '{print $1}' |sed 's/^p..c//' |sed 's/[imopqcdwy]...//'`

# Check that we are root ... so non-root users stop here
if [[ $EUID != 0 ]] ; then
   echo "This script needs to be run as the Super User, please run with root privileges!"
   exit 4
fi

# changing /etc/rpm/platform

echo "Changing /etc/rpm/platform to read "x86_64-redhat-linux""
echo "x86_64-redhat-linux" > /etc/rpm/platform


# register with the correct proxy

if [[ $cluster == "11" || $cluster == "06" || $cluster == "64" ]] ; then
      rhnproxy=10.2.106.3
      echo "This should be a box at Latisys, we will register with $rhnproxy"
      rhnreg_ks  --force --serverUrl=http://$rhnproxy/XMLRPC --activationkey=1-mxl-production
             if [[ $? == 1 ]] ; then
                   echo "There was a problem registering with your rhn proxy, try running the following by hand"
                   echo "rhnreg_ks  --force --serverUrl=http://$rhnproxy/XMLRPC --activationkey=1-mxl-production"
                   exit 1
             fi
      echo "We have successfully registered with $rhnproxy, we can now use yum to update this box"
else
      rhnproxy=10.2.107.2
      echo "This should be a box at Level 3, we will register with $rhnproxy"
      rhnreg_ks  --force --serverUrl=http://$rhnproxy/XMLRPC --activationkey=1-mxl-production
             if [[ $? == 1 ]] ; then
                   echo "There was a problem registering with your rhn proxy, try running the following by hand"
                   echo "rhnreg_ks  --force --serverUrl=http://$rhnproxy/XMLRPC --activationkey=1-mxl-production"
                   exit 1
             fi
      echo "We have successfully registered with $rhnproxy, you can now use yum to update this box"
fi

echo "Lets install rhncfg-actions, for spacewalk remote actions, we will do this via yum!"
yum -y install rhncfg-actions
     if [[ $? == "0" ]] ; then
        echo "Success, it appears yum/rhn are configured and working!"
        rhn-actions-control --enable-deploy --enable-diff --enable-upload --enable-mtime-upload
        rhn-actions-control --report
        echo "Go to spacewalk.corp.mxlogic.com to manage this server."
     else
        echo "yum install did not work for rhncfg-actions."
        echo "try running 'yum repolist' and verify this box is subscribed to the correct channels"
        echo "then try yum install rhncfg-actions"
     fi
