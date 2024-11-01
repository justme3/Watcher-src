#!/bin/sh
# KICKSTART CONFIGURATION FILE

### Domain Name ###
export domain="anbsu.com"
export infra="10.30.216.1"  # time server - used by network script
export build_server=10.30.216.122

export BladePort0="eth0"
export BladePort1="eth1"
export BladePort4="eth4"
export BladePort5="eth5
export BladePort6="eth6"
export BladePort7="eth7"

if [[ `/sbin/lspci |grep -c Fibre` != "0" ]] ; then
       export mac0=`/sbin/ifconfig ${BladePort4} |grep HWaddr |awk '{print $5}'`
       export mac1=`/sbin/ifconfig ${BladePort5} |grep HWaddr |awk '{print $5}'`
else
       export mac0=`/sbin/ifconfig ${BladePort6} |grep HWaddr |awk '{print $5}'`
       export mac1=`/sbin/ifconfig ${BladePort7} |grep HWaddr |awk '{print $5}'`
fi

### Machine Type (one letter, use chart below) ###
#       c       Event Channel
#       d       Database
#       i       Inbound MTA
#       m       MC Index
#       p       Portal/SQR
#       o       Outbound MTA
#       q       Bounce/MC delivery MTA

### Database Type (for when mtype="d")
#       db_log
#       db_quar
#       db_threat
#       db_pol
#       db_audit
#       all             (Untested)
#==================================


case $mac0 in
	00:26:55:84:4E:A0 )
		export hostname="labkord-smec01"
		export mtype="c"
		export private_ip="10.30.216.31"
		export public_ip="172.17.45.31"
	;;
	00:26:55:84:DD:60 )
		export hostname="labkord-smmo01"
		export mtype="o"
		export private_ip="10.30.216.32"
		export public_ip="172.17.45.32"
	;;
	00:26:55:84:39:A0 )
		export hostname="labkord-smmi01"
		export mtype="i"
		export private_ip="10.30.216.33"
		export public_ip="172.17.45.33"
	;;
	00:26:55:83:5F:C0 )
		export hostname="labkord-smmi02"
		export mtype="i"
		export private_ip="10.30.216.34"
		export public_ip="172.17.45.34"
	;;
	F4:CE:46:7F:56:98 )
		export hostname="labkord-smmi03"
		export mtype="i"
		export private_ip="10.30.216.35"
		export public_ip="172.17.45.35"
	;;
	F4:CE:46:7F:85:68 )
		export hostname="labkord-smmi04"
		export mtype="i"
		export private_ip="10.30.216.36"
		export public_ip="172.17.45.36"
	;;
	F4:CE:46:7F:36:90 )
		export hostname="labkord-smmi05"
		export mtype="i"
		export private_ip="10.30.216.37"
		export public_ip="172.17.45.37"
	;;
	00:26:55:83:6F:60 )
		export hostname="labkord-smsc01"
		export mtype="sc"
		export private_ip="10.30.216.38"
		export public_ip="172.17.45.38"
	;;
	00:26:55:83:6E:A0 )
		export hostname="labkord-smec02"
		export mtype="c"
		export private_ip="10.30.216.39"
		export public_ip="172.17.45.39"
	;;
	00:26:55:83:6F:70 )
		export hostname="labkord-smmb01"
		export mtype="o"
		export private_ip="10.30.216.40"
		export public_ip="172.17.45.40"
	;;
	00:26:55:83:7F:F0 )
		export hostname="labkord-smmi06"
		export mtype="i"
		export private_ip="10.30.216.41"
		export public_ip="172.17.45.41"
	;;
	00:26:55:83:6F:78 )
		export hostname="labkord-smmi07"
		export mtype="i"
		export private_ip="10.30.216.42"
		export public_ip="172.17.45.42"
	;;
	F4:CE:46:7F:35:88 )
		export hostname="labkord-smmi08"
		export mtype="i"
		export private_ip="10.30.216.43"
		export public_ip="172.17.45.43"
	;;
	F4:CE:46:7F:18:B8 )
		export hostname="labkord-smmi09"
		export mtype="i"
		export private_ip="10.30.216.44"
		export public_ip="172.17.45.44"
	;;
	F4:CE:46:7F:E7:20 )
		export hostname="labkord-smsc02"
		export mtype="sc"
		export private_ip="10.30.216.46"
		export public_ip="172.16.45.46"
	;;
	00:26:55:84:4E:58 )
		export hostname="labkord-smpl01"
		export mtype="p"
		export private_ip="10.30.216.11"
		export public_ip=""
	;;
	00:26:55:84:4C:08 )
		export hostname="labkord-smsq01"
		export mtype="p"
		export private_ip="10.30.216.12"
		export public_ip=""
	;;
	00:26:55:83:6F:A8 )
		export hostname="labkord-smdl01"
		export mtype="db_log"
		export private_ip="10.30.216.13"
		export public_ip=""
	;;
	00:26:55:83:6F:50 )
		export hostname="labkord-smdq01"
		export mtype="db_quar"
		export private_ip="10.30.216.14"
		export public_ip=""
	;;
	00:26:55:83:6F:D8 )
		export hostname="labkord-smdi01"
		export mtype="mc_index"
		export private_ip="10.30.216.15"
		export public_ip=""
	;;
	00:26:55:83:6F:20 )
		export hostname="labkord-smda01"
		export mtype="db_audit"
		export private_ip="10.30.216.16"
		export public_ip=""
	;;
	00:26:55:83:4E:B8 )
		export hostname="labkord-smdp01"
		export mtype="db_pol"
		export private_ip="10.30.216.17"
		export public_ip=""
	;;
	00:26:55:84:4E:90 )
		export hostname="labkord-smdt01"
		export mtype="db_threat"
		export private_ip="10.30.216.18"
		export public_ip=""
	;;
	00:26:55:7D:14:60 )
		export hostname="labkord-smpl02"
		export mtype="p"
		export private_ip="10.30.216.19"
		export public_ip=""
	;;
	00:26:55:83:6F:68 )
		export hostname="labkord-smsq02"
		export mtype="p"
		export private_ip="10.30.216.20"
		export public_ip=""
	;;
	00:26:55:83:6F:B8 )
		export hostname="labkord-smdl02"
		export mtype="db_log"
		export private_ip="10.30.216.21"
		export public_ip=""
	;;
	00:26:55:83:2C:40 )
		export hostname="labkord-smdq02"
		export mtype="db_quar"
		export private_ip="10.30.216.22"
		export public_ip=""
	;;
	00:26:55:83:7F:28 )
		export hostname="labkord-smmc01"
		export mtype="mc_store"
		export private_ip="10.30.216.23"
		export public_ip=""
	;;
	00:26:55:83:5F:68 )
		export hostname="labkord-smqc01"
		export mtype="p"
		export private_ip="10.30.216.24"
		export public_ip=""
	;;
	00:1A:64:C7:DA:C4 )
		export hostname="labkord-smpl02"
		export mtype="p"
		export private_ip="10.30.216.120"
		export public_ip=""
	;;
	00:1A:64:C2:C7:3C )
		export hostname="labkord-smsq02"
		export mtype="p"
		export private_ip="10.30.216.121"
		export public_ip=""
esac

# Network Associates
mta_na=1
# Authentium
mta_au=1
# SPF
mta_spf=1

### Subroutines
# Log output of commands
logc() {
	# Run the specified command and capture the output to a file
	`$* > /dev/ttyS0 2>&1 | tee -a /tmp/install-post.log 2>&1`
}
# Log text comment
logt() {
	echo $* > /dev/ttyS0 2>&1 | tee -a /tmp/install-post.log 2>&1
}

# Bomb out if error occurred
bomb() {
        if [ $1 -ne 0 ]; then
                echo "::> Error detected.  Not continuing."
                exit 1
        fi
        echo
}

###
# EOF
###

