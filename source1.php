<html>
<head>
	<title>Cacti</title>
	<meta http-equiv=refresh content='300'>
	<link href="include/main.css" rel="stylesheet">
	<link href="images/favicon.ico" rel="shortcut icon"/>
	<script type="text/javascript" src="include/layout.js"></script>
	<script type="text/javascript" src="include/treeview/ua.js"></script>
	<script type="text/javascript" src="include/treeview/ftiens4.js"></script>
	<script type="text/javascript" src="include/jscalendar/calendar.js"></script>
	<script type="text/javascript" src="include/jscalendar/lang/calendar-en.js"></script>
	<script type="text/javascript" src="include/jscalendar/calendar-setup.js"></script>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<a name='page_top'></a>

<table width="100%" height="100%" cellspacing="0" cellpadding="0">
	<tr height="37" bgcolor="#a9a9a9" class="noprint">
		<td colspan="2" valign="bottom" nowrap>
			<table width="100%" cellspacing="0" cellpadding="0">
				<tr>
					<td nowrap>
						&nbsp;<a href="index.php"><img src="images/tab_console.gif" alt="Console" align="absmiddle" border="0"></a><a href="graph_view.php"><img src="images/tab_graphs_down.gif" alt="Graphs" align="absmiddle" border="0"></a>&nbsp;
					</td>
					<td>
						<img src="images/cacti_backdrop2.gif" align="absmiddle">
					</td>
					<td align="right" nowrap>
						<a href="graph_settings.php"><img src="images/tab_settings.gif" border="0" alt="Settings" align="absmiddle"></a>&nbsp;&nbsp;<a href="graph_view.php?action=tree"><img src="images/tab_mode_tree_down.gif" border="0" title="Tree View" alt="Tree View" align="absmiddle"></a><a href="graph_view.php?action=list"><img src="images/tab_mode_list.gif" border="0" title="List View" alt="List View" align="absmiddle"></a><a href="graph_view.php?action=preview"><img src="images/tab_mode_preview.gif" border="0" title="Preview View" alt="Preview View" align="absmiddle"></a>&nbsp;<br>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr height="2" colspan="2" bgcolor="#183c8f" class="noprint">
		<td colspan="2">
			<img src="images/transparent_line.gif" width="170" height="2" border="0"><br>
		</td>
	</tr>
	<tr height="5" bgcolor="#e9e9e9" class="noprint">
		<td colspan="2">
			<table width="100%">
				<tr>
					<td>
						<a href='graph_view.php'>Graphs</a> -> Tree Mode					</td>
					<td align="right">
												Logged in as <strong>jvossler</strong> (<a href="logout.php">Logout</a>)&nbsp;
											</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr class="noprint">
		<td bgcolor="#efefef" colspan="1" height="8" style="background-image: url(images/shadow_gray.gif); background-repeat: repeat-x; border-right: #aaaaaa 1px solid;">
			<img src="images/transparent_line.gif" width="200" height="2" border="0"><br>
		</td>
		<td bgcolor="#ffffff" colspan="1" height="8" style="background-image: url(images/shadow.gif); background-repeat: repeat-x;">

		</td>
	</tr>

	
	<tr>
				<td valign="top" style="padding: 5px; border-right: #aaaaaa 1px solid;" bgcolor='#efefef' width='200' class='noprint'>
			<table border=0 cellpadding=0 cellspacing=0><tr><td><font size=-2><a style="font-size:7pt;text-decoration:none;color:silver" href="http://www.treemenu.net/" target=_blank></a></font></td></tr></table>
				<script type="text/javascript">
	<!--
	USETEXTLINKS = 1
	STARTALLOPEN = 0
	USEFRAMES = 0
	USEICONS = 0
	WRAPTEXT = 1
	PERSERVESTATE = 1
	HIGHLIGHT = 1
	foldersTree = gFld("", "")
ou0 = insFld(foldersTree, gFld("BlueArc", "graph_view.php?action=tree&tree_id=19"))
ou1 = insFld(ou0, gFld("<strong>Host:</strong> BA-MX-6-1", "graph_view.php?action=tree&tree_id=19&leaf_id=244"))
ou1 = insFld(ou0, gFld("<strong>Host:</strong> BA-MX-7-1", "graph_view.php?action=tree&tree_id=19&leaf_id=245"))
ou1 = insFld(ou0, gFld("<strong>Host:</strong> BA-MX-106", "graph_view.php?action=tree&tree_id=19&leaf_id=248"))
ou1 = insFld(ou0, gFld("<strong>Host:</strong> BA-MX-107", "graph_view.php?action=tree&tree_id=19&leaf_id=249"))
ou0 = insFld(foldersTree, gFld("Default View", "graph_view.php?action=tree&tree_id=13"))
ou0 = insFld(foldersTree, gFld("Hosting Greenplum Nodes", "graph_view.php?action=tree&tree_id=16"))
ou1 = insFld(ou0, gFld("<strong>Host:</strong> p01c07d141", "graph_view.php?action=tree&tree_id=16&leaf_id=216"))
ou1 = insFld(ou0, gFld("<strong>Host:</strong> p01c07d143", "graph_view.php?action=tree&tree_id=16&leaf_id=210"))
ou1 = insFld(ou0, gFld("<strong>Host:</strong> p01c07d144", "graph_view.php?action=tree&tree_id=16&leaf_id=211"))
ou1 = insFld(ou0, gFld("<strong>Host:</strong> p01c07d145", "graph_view.php?action=tree&tree_id=16&leaf_id=212"))
ou1 = insFld(ou0, gFld("<strong>Host:</strong> p01c07d146", "graph_view.php?action=tree&tree_id=16&leaf_id=213"))
ou1 = insFld(ou0, gFld("<strong>Host:</strong> p01c07d148", "graph_view.php?action=tree&tree_id=16&leaf_id=214"))
ou1 = insFld(ou0, gFld("<strong>Host:</strong> p01c07d149", "graph_view.php?action=tree&tree_id=16&leaf_id=215"))
ou0 = insFld(foldersTree, gFld("Hosting Network Devices", "graph_view.php?action=tree&tree_id=9"))
ou1 = insFld(ou0, gFld("<strong>Host:</strong> Level3-MXLBBS3", "graph_view.php?action=tree&tree_id=9&leaf_id=56"))
ou1 = insFld(ou0, gFld("<strong>Host:</strong> Level3-MXLBBS4", "graph_view.php?action=tree&tree_id=9&leaf_id=57"))
ou1 = insFld(ou0, gFld("<strong>Host:</strong> Level3_Cisco-FWSM", "graph_view.php?action=tree&tree_id=9&leaf_id=107"))
ou1 = insFld(ou0, gFld("Hosting Blade Interconnects", "graph_view.php?action=tree&tree_id=9&leaf_id=201"))
ou2 = insFld(ou1, gFld("<strong>Host:</strong> r14-en1-sw1", "graph_view.php?action=tree&tree_id=9&leaf_id=202"))
ou2 = insFld(ou1, gFld("<strong>Host:</strong> r14-en1-sw2", "graph_view.php?action=tree&tree_id=9&leaf_id=203"))
ou0 = insFld(foldersTree, gFld("International Sites", "graph_view.php?action=tree&tree_id=18"))
ou1 = insFld(ou0, gFld("<strong>Host:</strong> AMS-MXLBBS1", "graph_view.php?action=tree&tree_id=18&leaf_id=238"))
ou1 = insFld(ou0, gFld("<strong>Host:</strong> SYD-MXLBBS1", "graph_view.php?action=tree&tree_id=18&leaf_id=240"))
ou1 = insFld(ou0, gFld("<strong>Host:</strong> AKL-MXLBBS1", "graph_view.php?action=tree&tree_id=18&leaf_id=237"))
ou1 = insFld(ou0, gFld("<strong>Host:</strong> TKO-MXLBBS1", "graph_view.php?action=tree&tree_id=18&leaf_id=241"))
ou1 = insFld(ou0, gFld("<strong>Host:</strong> LON-MXLBBS1", "graph_view.php?action=tree&tree_id=18&leaf_id=239"))
ou0 = insFld(foldersTree, gFld("Latisys Network devices", "graph_view.php?action=tree&tree_id=8"))
ou1 = insFld(ou0, gFld("<strong>Host:</strong> D393-MXLBBS1", "graph_view.php?action=tree&tree_id=8&leaf_id=55"))
ou1 = insFld(ou0, gFld("<strong>Host:</strong> D393-MXLBBS2", "graph_view.php?action=tree&tree_id=8&leaf_id=58"))
ou1 = insFld(ou0, gFld("<strong>Host:</strong> D393_Cisco-FWSM", "graph_view.php?action=tree&tree_id=8&leaf_id=59"))
ou1 = insFld(ou0, gFld("Data393 Pod2 Blades", "graph_view.php?action=tree&tree_id=8&leaf_id=157"))
ou2 = insFld(ou1, gFld("<strong>Host:</strong> pod2-r7-en3-sw1", "graph_view.php?action=tree&tree_id=8&leaf_id=156"))
ou2 = insFld(ou1, gFld("<strong>Host:</strong> pod2-r7-en3-sw2", "graph_view.php?action=tree&tree_id=8&leaf_id=158"))
ou2 = insFld(ou1, gFld("<strong>Host:</strong> pod2-r7-en2-sw1", "graph_view.php?action=tree&tree_id=8&leaf_id=159"))
ou2 = insFld(ou1, gFld("<strong>Host:</strong> pod2-r7-en2-sw2", "graph_view.php?action=tree&tree_id=8&leaf_id=160"))
ou2 = insFld(ou1, gFld("<strong>Host:</strong> pod2-r7-en1-sw1", "graph_view.php?action=tree&tree_id=8&leaf_id=161"))
ou2 = insFld(ou1, gFld("<strong>Host:</strong> pod2-r7-en1-sw2", "graph_view.php?action=tree&tree_id=8&leaf_id=162"))
ou2 = insFld(ou1, gFld("<strong>Host:</strong> pod2-r5-en1-sw1", "graph_view.php?action=tree&tree_id=8&leaf_id=163"))
ou2 = insFld(ou1, gFld("<strong>Host:</strong> pod2-r5-en1-sw2", "graph_view.php?action=tree&tree_id=8&leaf_id=164"))
ou2 = insFld(ou1, gFld("<strong>Host:</strong> pod2-r5-en2-sw1", "graph_view.php?action=tree&tree_id=8&leaf_id=165"))
ou2 = insFld(ou1, gFld("<strong>Host:</strong> pod2-r5-en2-sw2", "graph_view.php?action=tree&tree_id=8&leaf_id=166"))
ou2 = insFld(ou1, gFld("<strong>Host:</strong> pod2-r5-en3-sw1", "graph_view.php?action=tree&tree_id=8&leaf_id=167"))
ou2 = insFld(ou1, gFld("<strong>Host:</strong> pod2-r5-en3-sw2", "graph_view.php?action=tree&tree_id=8&leaf_id=168"))
ou1 = insFld(ou0, gFld("Data393 Pod2 HA ", "graph_view.php?action=tree&tree_id=8&leaf_id=169"))
ou2 = insFld(ou1, gFld("<strong>Host:</strong> pod2-r3-switch2", "graph_view.php?action=tree&tree_id=8&leaf_id=188"))
ou2 = insFld(ou1, gFld("<strong>Host:</strong> pod2-r3-switch1", "graph_view.php?action=tree&tree_id=8&leaf_id=194"))
ou1 = insFld(ou0, gFld("Data393 Pod1 Blades", "graph_view.php?action=tree&tree_id=8&leaf_id=170"))
ou2 = insFld(ou1, gFld("<strong>Host:</strong> pod1-r8-en3-sw1", "graph_view.php?action=tree&tree_id=8&leaf_id=174"))
ou2 = insFld(ou1, gFld("<strong>Host:</strong> pod1-r8-en3-sw2", "graph_view.php?action=tree&tree_id=8&leaf_id=175"))
ou2 = insFld(ou1, gFld("<strong>Host:</strong> pod1-r8-en2-sw1", "graph_view.php?action=tree&tree_id=8&leaf_id=178"))
ou2 = insFld(ou1, gFld("<strong>Host:</strong> pod1-r8-en2-sw2", "graph_view.php?action=tree&tree_id=8&leaf_id=176"))
ou2 = insFld(ou1, gFld("<strong>Host:</strong> pod1-r8-en1-sw1", "graph_view.php?action=tree&tree_id=8&leaf_id=179"))
ou2 = insFld(ou1, gFld("<strong>Host:</strong> pod1-r8-en1-sw2", "graph_view.php?action=tree&tree_id=8&leaf_id=193"))
ou2 = insFld(ou1, gFld("<strong>Host:</strong> pod1-r6-en3-sw1", "graph_view.php?action=tree&tree_id=8&leaf_id=181"))
ou2 = insFld(ou1, gFld("<strong>Host:</strong> pod1-r6-en3-sw2", "graph_view.php?action=tree&tree_id=8&leaf_id=182"))
ou2 = insFld(ou1, gFld("<strong>Host:</strong> pod1-r6-en2-sw1", "graph_view.php?action=tree&tree_id=8&leaf_id=183"))
ou2 = insFld(ou1, gFld("<strong>Host:</strong> pod1-r6-en2-sw2", "graph_view.php?action=tree&tree_id=8&leaf_id=184"))
ou2 = insFld(ou1, gFld("<strong>Host:</strong> pod1-r6-en1-sw1", "graph_view.php?action=tree&tree_id=8&leaf_id=185"))
ou2 = insFld(ou1, gFld("<strong>Host:</strong> pod1-r6-en1-sw2", "graph_view.php?action=tree&tree_id=8&leaf_id=186"))
ou1 = insFld(ou0, gFld("Data393 Pod1 HA", "graph_view.php?action=tree&tree_id=8&leaf_id=171"))
ou2 = insFld(ou1, gFld("<strong>Host:</strong> pod1-r2-switch1", "graph_view.php?action=tree&tree_id=8&leaf_id=172"))
ou2 = insFld(ou1, gFld("<strong>Host:</strong> pod1-r2-switch2", "graph_view.php?action=tree&tree_id=8&leaf_id=173"))
ou1 = insFld(ou0, gFld("<strong>Host:</strong> pod1-r14-en1-sw1", "graph_view.php?action=tree&tree_id=8&leaf_id=180"))
ou0 = insFld(foldersTree, gFld("Side Bar", "graph_view.php?action=tree&tree_id=14"))
	foldersTree.treeID = "t2";
	//-->
	</script>
				<script type="text/javascript">initializeDocument();</script>

					</td>
				<td valign="top" style="padding: 5px; border-right: #aaaaaa 1px solid;">
<table width='100%' align='center' cellpadding='3'><table width='100%' style='background-color: #f5f5f5; border: 1px solid #bbbbbb;' align='center' cellpadding='3'>
	<script type='text/javascript'>
	// Initialize the calendar
	calendar=null;

	// This function displays the calendar associated to the input field 'id'
	function showCalendar(id) {
		var el = document.getElementById(id);
		if (calendar != null) {
			// we already have some calendar created
			calendar.hide();  // so we hide it first.
		} else {
			// first-time call, create the calendar.
			var cal = new Calendar(true, null, selected, closeHandler);
			cal.weekNumbers = false;  // Do not display the week number
			cal.showsTime = true;     // Display the time
			cal.time24 = true;        // Hours have a 24 hours format
			cal.showsOtherMonths = false;    // Just the current month is displayed
			calendar = cal;                  // remember it in the global var
			cal.setRange(1900, 2070);        // min/max year allowed.
			cal.create();
		}

		calendar.setDateFormat('%Y-%m-%d %H:%M');    // set the specified date format
		calendar.parseDate(el.value);                // try to parse the text in field
		calendar.sel = el;                           // inform it what input field we use

		// Display the calendar below the input field
		calendar.showAtElement(el, "Br");        // show the calendar

		return false;
	}

	// This function update the date in the input field when selected
	function selected(cal, date) {
		cal.sel.value = date;      // just update the date in the input field.
	}

	// This function gets called when the end-user clicks on the 'Close' button.
	// It just hides the calendar without destroying it.
	function closeHandler(cal) {
		cal.hide();                        // hide the calendar
		calendar = null;
	}
</script>
<script type="text/javascript">
<!--

	function applyTimespanFilterChange(objForm) {
		strURL = '?predefined_timespan=' + objForm.predefined_timespan.value;
		strURL = strURL + '&predefined_timeshift=' + objForm.predefined_timeshift.value;
		document.location = strURL;
	}

-->
</script>

	<tr bgcolor="E5E5E5" class="noprint">
		<form name="form_timespan_selector" method="post">
		<td class="noprint">
			<table width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td nowrap style='white-space: nowrap;' width='55'>
						&nbsp;<strong>Presets:</strong>&nbsp;
					</td>
					<td nowrap style='white-space: nowrap;' width='130'>
						<select name='predefined_timespan' onChange="applyTimespanFilterChange(document.form_timespan_selector)">
							<option value='1'>Last Half Hour</option>
<option value='2'>Last Hour</option>
<option value='3'>Last 2 Hours</option>
<option value='4'>Last 4 Hours</option>
<option value='5'>Last 6 Hours</option>
<option value='6'>Last 12 Hours</option>
<option value='7' selected>Last Day</option>
<option value='8'>Last 2 Days</option>
<option value='9'>Last 3 Days</option>
<option value='10'>Last 4 Days</option>
<option value='11'>Last Week</option>
<option value='12'>Last 2 Weeks</option>
<option value='13'>Last Month</option>
<option value='14'>Last 2 Months</option>
<option value='15'>Last 3 Months</option>
<option value='16'>Last 4 Months</option>
<option value='17'>Last 6 Months</option>
<option value='18'>Last Year</option>
<option value='19'>Last 2 Years</option>
<option value='20'>Day Shift</option>
<option value='21'>This Day</option>
<option value='22'>This Week</option>
<option value='23'>This Month</option>
<option value='24'>This Year</option>
<option value='25'>Previous Day</option>
<option value='26'>Previous Week</option>
<option value='27'>Previous Month</option>
<option value='28'>Previous Year</option>
						</select>
					</td>
					<td nowrap style='white-space: nowrap;' width='30'>
						&nbsp;<strong>From:</strong>&nbsp;
					</td>
					<td width='150' nowrap style='white-space: nowrap;'>
						<input type='text' name='date1' id='date1' title='Graph Begin Timestamp' size='14' value='2011-05-03 08:58'>
						&nbsp;<input type='image' src='images/calendar.gif' alt='Start date selector' title='Start date selector' border='0' align='absmiddle' onclick="return showCalendar('date1');">&nbsp;
					</td>
					<td nowrap style='white-space: nowrap;' width='20'>
						&nbsp;<strong>To:</strong>&nbsp;
					</td>
					<td width='150' nowrap style='white-space: nowrap;'>
						<input type='text' name='date2' id='date2' title='Graph End Timestamp' size='14' value='2011-05-04 08:58'>
						&nbsp;<input type='image' src='images/calendar.gif' alt='End date selector' title='End date selector' border='0' align='absmiddle' onclick="return showCalendar('date2');">
					</td>
					<td width='150' nowrap style='white-space: nowrap;'>
						&nbsp;&nbsp;<input type='image' name='move_left' src='images/move_left.gif' alt='Left' border='0' align='absmiddle' title='Shift Left'>
						<select name='predefined_timeshift' title='Define Shifting Interval' onChange="applyTimespanFilterChange(document.form_timespan_selector)">
							<option value='1'>30 Min</option>
<option value='2'>1 Hour</option>
<option value='3'>2 Hours</option>
<option value='4' selected>4 Hours</option>
<option value='5'>6 Hours</option>
<option value='6'>12 Hours</option>
<option value='7'>1 Day</option>
<option value='8'>2 Days</option>
<option value='9'>3 Days</option>
<option value='10'>4 Days</option>
<option value='11'>1 Week</option>
<option value='12'>2 Weeks</option>
<option value='13'>1 Month</option>
<option value='14'>2 Months</option>
<option value='15'>3 Months</option>
<option value='16'>4 Months</option>
<option value='17'>6 Months</option>
<option value='18'>1 Year</option>
<option value='19'>2 Years</option>
						</select>
						<input type='image' name='move_right' src='images/move_right.gif' alt='Right' border='0' align='absmiddle' title='Shift Right'>
					</td>
					<td nowrap style='white-space: nowrap;'>
						&nbsp;&nbsp;<input type='image' name='button_refresh' src='images/button_refresh.gif' alt='Refresh selected time span' border='0' align='absmiddle' value='refresh'>
						<input type='image' name='button_clear' src='images/button_clear.gif' alt='Return to the default time span' border='0' align='absmiddle'>
					</td>
				</tr>
			</table>
		</td>
		</form>
	</tr></table><br><table width='100%' style='background-color: #f5f5f5; border: 1px solid #bbbbbb;' align='center' cellpadding='3'>
<tr bgcolor='#6d88ad'><td width='390' colspan='3' class='textHeaderDark'><strong>Tree:</strong> Latisys Network devices-> <strong>Host:</strong> D393-MXLBBS2</td></tr><tr bgcolor='#a9b7cb'><td colspan='3' class='textHeaderDark'><strong>Graph Template:</strong> 1 Cisco - CPU Usage</td></tr><tr>			<td align='center' width='49%'>
				<table width='1' cellpadding='0'>
					<tr>
						<td>
							<a href='graph.php?action=view&rra_id=all&local_graph_id=31'><img class='graphimage' id='graph_31' src='graph_image.php?local_graph_id=31&rra_id=0&graph_height=100&graph_width=300&graph_nolegend=true&view_type=tree&graph_start=1304434704&graph_end=1304521104' border='0' alt='D393-MXLBBS2 - CPU Usage'></a>
						</td>
						<td valign='top' style='padding: 3px;'>
							<a href='graph.php?action=zoom&local_graph_id=31&rra_id=0&view_type=tree&graph_start=1304434704&graph_end=1304521104'><img src='images/graph_zoom.gif' border='0' alt='Zoom Graph' title='Zoom Graph' style='padding: 3px;'></a><br>
							<a href='graph_xport.php?local_graph_id=31&rra_id=0&view_type=tree&graph_start=1304434704&graph_end=1304521104'><img src='images/graph_query.png' border='0' alt='CSV Export' title='CSV Export' style='padding: 3px;'></a><br>
							<a href='#page_top'><img src='images/graph_page_top.gif' border='0' alt='Page Top' title='Page Top' style='padding: 3px;'></a><br>
						</td>
					</tr>
				</table>
			</td>
			</tr><tr bgcolor='#a9b7cb'><td colspan='3' class='textHeaderDark'><strong>Graph Template:</strong> 2 Cisco - Memory Usage</td></tr><tr>			<td align='center' width='49%'>
				<table width='1' cellpadding='0'>
					<tr>
						<td>
							<a href='graph.php?action=view&rra_id=all&local_graph_id=32'><img class='graphimage' id='graph_32' src='graph_image.php?local_graph_id=32&rra_id=0&graph_height=100&graph_width=300&graph_nolegend=true&view_type=tree&graph_start=1304434704&graph_end=1304521104' border='0' alt='D393-MXLBBS2 - Memory Usage'></a>
						</td>
						<td valign='top' style='padding: 3px;'>
							<a href='graph.php?action=zoom&local_graph_id=32&rra_id=0&view_type=tree&graph_start=1304434704&graph_end=1304521104'><img src='images/graph_zoom.gif' border='0' alt='Zoom Graph' title='Zoom Graph' style='padding: 3px;'></a><br>
							<a href='graph_xport.php?local_graph_id=32&rra_id=0&view_type=tree&graph_start=1304434704&graph_end=1304521104'><img src='images/graph_query.png' border='0' alt='CSV Export' title='CSV Export' style='padding: 3px;'></a><br>
							<a href='#page_top'><img src='images/graph_page_top.gif' border='0' alt='Page Top' title='Page Top' style='padding: 3px;'></a><br>
						</td>
					</tr>
				</table>
			</td>
			</tr><tr bgcolor='#a9b7cb'><td colspan='3' class='textHeaderDark'><strong>Graph Template:</strong> 3 Cisco - Temperature</td></tr><tr>			<td align='center' width='49%'>
				<table width='1' cellpadding='0'>
					<tr>
						<td>
							<a href='graph.php?action=view&rra_id=all&local_graph_id=33'><img class='graphimage' id='graph_33' src='graph_image.php?local_graph_id=33&rra_id=0&graph_height=100&graph_width=300&graph_nolegend=true&view_type=tree&graph_start=1304434704&graph_end=1304521104' border='0' alt='D393-MXLBBS2 - Temperature'></a>
						</td>
						<td valign='top' style='padding: 3px;'>
							<a href='graph.php?action=zoom&local_graph_id=33&rra_id=0&view_type=tree&graph_start=1304434704&graph_end=1304521104'><img src='images/graph_zoom.gif' border='0' alt='Zoom Graph' title='Zoom Graph' style='padding: 3px;'></a><br>
							<a href='graph_xport.php?local_graph_id=33&rra_id=0&view_type=tree&graph_start=1304434704&graph_end=1304521104'><img src='images/graph_query.png' border='0' alt='CSV Export' title='CSV Export' style='padding: 3px;'></a><br>
							<a href='#page_top'><img src='images/graph_page_top.gif' border='0' alt='Page Top' title='Page Top' style='padding: 3px;'></a><br>
						</td>
					</tr>
				</table>
			</td>
			</tr><tr bgcolor='#a9b7cb'><td colspan='3' class='textHeaderDark'><strong>Graph Template:</strong> Cisco SLB Stats</td></tr><tr>			<td align='center' width='49%'>
				<table width='1' cellpadding='0'>
					<tr>
						<td>
							<a href='graph.php?action=view&rra_id=all&local_graph_id=624'><img class='graphimage' id='graph_624' src='graph_image.php?local_graph_id=624&rra_id=0&graph_height=100&graph_width=300&graph_nolegend=true&view_type=tree&graph_start=1304434704&graph_end=1304521104' border='0' alt='D393-MXLBBS2 SLB Module # 8'></a>
						</td>
						<td valign='top' style='padding: 3px;'>
							<a href='graph.php?action=zoom&local_graph_id=624&rra_id=0&view_type=tree&graph_start=1304434704&graph_end=1304521104'><img src='images/graph_zoom.gif' border='0' alt='Zoom Graph' title='Zoom Graph' style='padding: 3px;'></a><br>
							<a href='graph_xport.php?local_graph_id=624&rra_id=0&view_type=tree&graph_start=1304434704&graph_end=1304521104'><img src='images/graph_query.png' border='0' alt='CSV Export' title='CSV Export' style='padding: 3px;'></a><br>
							<a href='#page_top'><img src='images/graph_page_top.gif' border='0' alt='Page Top' title='Page Top' style='padding: 3px;'></a><br>
						</td>
					</tr>
				</table>
			</td>
			</tr><tr bgcolor='#a9b7cb'><td colspan='3' class='textHeaderDark'><strong>Graph Template:</strong> Interface - Errors/Discards</td></tr><tr>			<td align='center' width='49%'>
				<table width='1' cellpadding='0'>
					<tr>
						<td>
							<a href='graph.php?action=view&rra_id=all&local_graph_id=695'><img class='graphimage' id='graph_695' src='graph_image.php?local_graph_id=695&rra_id=0&graph_height=100&graph_width=300&graph_nolegend=true&view_type=tree&graph_start=1304434704&graph_end=1304521104' border='0' alt='D393-MXLBBS2 - Errors - Gi8/1'></a>
						</td>
						<td valign='top' style='padding: 3px;'>
							<a href='graph.php?action=zoom&local_graph_id=695&rra_id=0&view_type=tree&graph_start=1304434704&graph_end=1304521104'><img src='images/graph_zoom.gif' border='0' alt='Zoom Graph' title='Zoom Graph' style='padding: 3px;'></a><br>
							<a href='graph_xport.php?local_graph_id=695&rra_id=0&view_type=tree&graph_start=1304434704&graph_end=1304521104'><img src='images/graph_query.png' border='0' alt='CSV Export' title='CSV Export' style='padding: 3px;'></a><br>
							<a href='#page_top'><img src='images/graph_page_top.gif' border='0' alt='Page Top' title='Page Top' style='padding: 3px;'></a><br>
						</td>
					</tr>
				</table>
			</td>
						<td align='center' width='49%'>
				<table width='1' cellpadding='0'>
					<tr>
						<td>
							<a href='graph.php?action=view&rra_id=all&local_graph_id=696'><img class='graphimage' id='graph_696' src='graph_image.php?local_graph_id=696&rra_id=0&graph_height=100&graph_width=300&graph_nolegend=true&view_type=tree&graph_start=1304434704&graph_end=1304521104' border='0' alt='D393-MXLBBS2 - Errors - Gi8/2'></a>
						</td>
						<td valign='top' style='padding: 3px;'>
							<a href='graph.php?action=zoom&local_graph_id=696&rra_id=0&view_type=tree&graph_start=1304434704&graph_end=1304521104'><img src='images/graph_zoom.gif' border='0' alt='Zoom Graph' title='Zoom Graph' style='padding: 3px;'></a><br>
							<a href='graph_xport.php?local_graph_id=696&rra_id=0&view_type=tree&graph_start=1304434704&graph_end=1304521104'><img src='images/graph_query.png' border='0' alt='CSV Export' title='CSV Export' style='padding: 3px;'></a><br>
							<a href='#page_top'><img src='images/graph_page_top.gif' border='0' alt='Page Top' title='Page Top' style='padding: 3px;'></a><br>
						</td>
					</tr>
				</table>
			</td>
			</tr><tr>			<td align='center' width='49%'>
				<table width='1' cellpadding='0'>
					<tr>
						<td>
							<a href='graph.php?action=view&rra_id=all&local_graph_id=697'><img class='graphimage' id='graph_697' src='graph_image.php?local_graph_id=697&rra_id=0&graph_height=100&graph_width=300&graph_nolegend=true&view_type=tree&graph_start=1304434704&graph_end=1304521104' border='0' alt='D393-MXLBBS2 - Errors - Gi8/3'></a>
						</td>
						<td valign='top' style='padding: 3px;'>
							<a href='graph.php?action=zoom&local_graph_id=697&rra_id=0&view_type=tree&graph_start=1304434704&graph_end=1304521104'><img src='images/graph_zoom.gif' border='0' alt='Zoom Graph' title='Zoom Graph' style='padding: 3px;'></a><br>
							<a href='graph_xport.php?local_graph_id=697&rra_id=0&view_type=tree&graph_start=1304434704&graph_end=1304521104'><img src='images/graph_query.png' border='0' alt='CSV Export' title='CSV Export' style='padding: 3px;'></a><br>
							<a href='#page_top'><img src='images/graph_page_top.gif' border='0' alt='Page Top' title='Page Top' style='padding: 3px;'></a><br>
						</td>
					</tr>
				</table>
			</td>
						<td align='center' width='49%'>
				<table width='1' cellpadding='0'>
					<tr>
						<td>
							<a href='graph.php?action=view&rra_id=all&local_graph_id=101'><img class='graphimage' id='graph_101' src='graph_image.php?local_graph_id=101&rra_id=0&graph_height=100&graph_width=300&graph_nolegend=true&view_type=tree&graph_start=1304434704&graph_end=1304521104' border='0' alt='D393-MXLBBS2 - Errors - Internet Uplink'></a>
						</td>
						<td valign='top' style='padding: 3px;'>
							<a href='graph.php?action=zoom&local_graph_id=101&rra_id=0&view_type=tree&graph_start=1304434704&graph_end=1304521104'><img src='images/graph_zoom.gif' border='0' alt='Zoom Graph' title='Zoom Graph' style='padding: 3px;'></a><br>
							<a href='graph_xport.php?local_graph_id=101&rra_id=0&view_type=tree&graph_start=1304434704&graph_end=1304521104'><img src='images/graph_query.png' border='0' alt='CSV Export' title='CSV Export' style='padding: 3px;'></a><br>
							<a href='#page_top'><img src='images/graph_page_top.gif' border='0' alt='Page Top' title='Page Top' style='padding: 3px;'></a><br>
						</td>
					</tr>
				</table>
			</td>
			</tr><tr bgcolor='#a9b7cb'><td colspan='3' class='textHeaderDark'><strong>Graph Template:</strong> Interface - Traffic (bits/sec)</td></tr><tr>			<td align='center' width='49%'>
				<table width='1' cellpadding='0'>
					<tr>
						<td>
							<a href='graph.php?action=view&rra_id=all&local_graph_id=707'><img class='graphimage' id='graph_707' src='graph_image.php?local_graph_id=707&rra_id=0&graph_height=100&graph_width=300&graph_nolegend=true&view_type=tree&graph_start=1304434704&graph_end=1304521104' border='0' alt='D393-MXLBBS2 - Latisys - Secondary Internet Uplink'></a>
						</td>
						<td valign='top' style='padding: 3px;'>
							<a href='graph.php?action=zoom&local_graph_id=707&rra_id=0&view_type=tree&graph_start=1304434704&graph_end=1304521104'><img src='images/graph_zoom.gif' border='0' alt='Zoom Graph' title='Zoom Graph' style='padding: 3px;'></a><br>
							<a href='graph_xport.php?local_graph_id=707&rra_id=0&view_type=tree&graph_start=1304434704&graph_end=1304521104'><img src='images/graph_query.png' border='0' alt='CSV Export' title='CSV Export' style='padding: 3px;'></a><br>
							<a href='#page_top'><img src='images/graph_page_top.gif' border='0' alt='Page Top' title='Page Top' style='padding: 3px;'></a><br>
						</td>
					</tr>
				</table>
			</td>
						<td align='center' width='49%'>
				<table width='1' cellpadding='0'>
					<tr>
						<td>
							<a href='graph.php?action=view&rra_id=all&local_graph_id=708'><img class='graphimage' id='graph_708' src='graph_image.php?local_graph_id=708&rra_id=0&graph_height=100&graph_width=300&graph_nolegend=true&view_type=tree&graph_start=1304434704&graph_end=1304521104' border='0' alt='D393-MXLBBS2 - Metro to Hosting'></a>
						</td>
						<td valign='top' style='padding: 3px;'>
							<a href='graph.php?action=zoom&local_graph_id=708&rra_id=0&view_type=tree&graph_start=1304434704&graph_end=1304521104'><img src='images/graph_zoom.gif' border='0' alt='Zoom Graph' title='Zoom Graph' style='padding: 3px;'></a><br>
							<a href='graph_xport.php?local_graph_id=708&rra_id=0&view_type=tree&graph_start=1304434704&graph_end=1304521104'><img src='images/graph_query.png' border='0' alt='CSV Export' title='CSV Export' style='padding: 3px;'></a><br>
							<a href='#page_top'><img src='images/graph_page_top.gif' border='0' alt='Page Top' title='Page Top' style='padding: 3px;'></a><br>
						</td>
					</tr>
				</table>
			</td>
			</tr><tr>			<td align='center' width='49%'>
				<table width='1' cellpadding='0'>
					<tr>
						<td>
							<a href='graph.php?action=view&rra_id=all&local_graph_id=111'><img class='graphimage' id='graph_111' src='graph_image.php?local_graph_id=111&rra_id=0&graph_height=100&graph_width=300&graph_nolegend=true&view_type=tree&graph_start=1304434704&graph_end=1304521104' border='0' alt='D393-MXLBBS2 - Traffic - 6509 Port Channel'></a>
						</td>
						<td valign='top' style='padding: 3px;'>
							<a href='graph.php?action=zoom&local_graph_id=111&rra_id=0&view_type=tree&graph_start=1304434704&graph_end=1304521104'><img src='images/graph_zoom.gif' border='0' alt='Zoom Graph' title='Zoom Graph' style='padding: 3px;'></a><br>
							<a href='graph_xport.php?local_graph_id=111&rra_id=0&view_type=tree&graph_start=1304434704&graph_end=1304521104'><img src='images/graph_query.png' border='0' alt='CSV Export' title='CSV Export' style='padding: 3px;'></a><br>
							<a href='#page_top'><img src='images/graph_page_top.gif' border='0' alt='Page Top' title='Page Top' style='padding: 3px;'></a><br>
						</td>
					</tr>
				</table>
			</td>
						<td align='center' width='49%'>
				<table width='1' cellpadding='0'>
					<tr>
						<td>
							<a href='graph.php?action=view&rra_id=all&local_graph_id=742'><img class='graphimage' id='graph_742' src='graph_image.php?local_graph_id=742&rra_id=0&graph_height=100&graph_width=300&graph_nolegend=true&view_type=tree&graph_start=1304434704&graph_end=1304521104' border='0' alt='D393-MXLBBS2 - Traffic - BlueArc PortChannel Archon'></a>
						</td>
						<td valign='top' style='padding: 3px;'>
							<a href='graph.php?action=zoom&local_graph_id=742&rra_id=0&view_type=tree&graph_start=1304434704&graph_end=1304521104'><img src='images/graph_zoom.gif' border='0' alt='Zoom Graph' title='Zoom Graph' style='padding: 3px;'></a><br>
							<a href='graph_xport.php?local_graph_id=742&rra_id=0&view_type=tree&graph_start=1304434704&graph_end=1304521104'><img src='images/graph_query.png' border='0' alt='CSV Export' title='CSV Export' style='padding: 3px;'></a><br>
							<a href='#page_top'><img src='images/graph_page_top.gif' border='0' alt='Page Top' title='Page Top' style='padding: 3px;'></a><br>
						</td>
					</tr>
				</table>
			</td>
			</tr><tr>			<td align='center' width='49%'>
				<table width='1' cellpadding='0'>
					<tr>
						<td>
							<a href='graph.php?action=view&rra_id=all&local_graph_id=741'><img class='graphimage' id='graph_741' src='graph_image.php?local_graph_id=741&rra_id=0&graph_height=100&graph_width=300&graph_nolegend=true&view_type=tree&graph_start=1304434704&graph_end=1304521104' border='0' alt='D393-MXLBBS2 - Traffic - BlueArc PortChannel Quar'></a>
						</td>
						<td valign='top' style='padding: 3px;'>
							<a href='graph.php?action=zoom&local_graph_id=741&rra_id=0&view_type=tree&graph_start=1304434704&graph_end=1304521104'><img src='images/graph_zoom.gif' border='0' alt='Zoom Graph' title='Zoom Graph' style='padding: 3px;'></a><br>
							<a href='graph_xport.php?local_graph_id=741&rra_id=0&view_type=tree&graph_start=1304434704&graph_end=1304521104'><img src='images/graph_query.png' border='0' alt='CSV Export' title='CSV Export' style='padding: 3px;'></a><br>
							<a href='#page_top'><img src='images/graph_page_top.gif' border='0' alt='Page Top' title='Page Top' style='padding: 3px;'></a><br>
						</td>
					</tr>
				</table>
			</td>
						<td align='center' width='49%'>
				<table width='1' cellpadding='0'>
					<tr>
						<td>
							<a href='graph.php?action=view&rra_id=all&local_graph_id=692'><img class='graphimage' id='graph_692' src='graph_image.php?local_graph_id=692&rra_id=0&graph_height=100&graph_width=300&graph_nolegend=true&view_type=tree&graph_start=1304434704&graph_end=1304521104' border='0' alt='D393-MXLBBS2 - Traffic - Gi8/1'></a>
						</td>
						<td valign='top' style='padding: 3px;'>
							<a href='graph.php?action=zoom&local_graph_id=692&rra_id=0&view_type=tree&graph_start=1304434704&graph_end=1304521104'><img src='images/graph_zoom.gif' border='0' alt='Zoom Graph' title='Zoom Graph' style='padding: 3px;'></a><br>
							<a href='graph_xport.php?local_graph_id=692&rra_id=0&view_type=tree&graph_start=1304434704&graph_end=1304521104'><img src='images/graph_query.png' border='0' alt='CSV Export' title='CSV Export' style='padding: 3px;'></a><br>
							<a href='#page_top'><img src='images/graph_page_top.gif' border='0' alt='Page Top' title='Page Top' style='padding: 3px;'></a><br>
						</td>
					</tr>
				</table>
			</td>
			</tr><tr>			<td align='center' width='49%'>
				<table width='1' cellpadding='0'>
					<tr>
						<td>
							<a href='graph.php?action=view&rra_id=all&local_graph_id=693'><img class='graphimage' id='graph_693' src='graph_image.php?local_graph_id=693&rra_id=0&graph_height=100&graph_width=300&graph_nolegend=true&view_type=tree&graph_start=1304434704&graph_end=1304521104' border='0' alt='D393-MXLBBS2 - Traffic - Gi8/2'></a>
						</td>
						<td valign='top' style='padding: 3px;'>
							<a href='graph.php?action=zoom&local_graph_id=693&rra_id=0&view_type=tree&graph_start=1304434704&graph_end=1304521104'><img src='images/graph_zoom.gif' border='0' alt='Zoom Graph' title='Zoom Graph' style='padding: 3px;'></a><br>
							<a href='graph_xport.php?local_graph_id=693&rra_id=0&view_type=tree&graph_start=1304434704&graph_end=1304521104'><img src='images/graph_query.png' border='0' alt='CSV Export' title='CSV Export' style='padding: 3px;'></a><br>
							<a href='#page_top'><img src='images/graph_page_top.gif' border='0' alt='Page Top' title='Page Top' style='padding: 3px;'></a><br>
						</td>
					</tr>
				</table>
			</td>
						<td align='center' width='49%'>
				<table width='1' cellpadding='0'>
					<tr>
						<td>
							<a href='graph.php?action=view&rra_id=all&local_graph_id=694'><img class='graphimage' id='graph_694' src='graph_image.php?local_graph_id=694&rra_id=0&graph_height=100&graph_width=300&graph_nolegend=true&view_type=tree&graph_start=1304434704&graph_end=1304521104' border='0' alt='D393-MXLBBS2 - Traffic - Gi8/3'></a>
						</td>
						<td valign='top' style='padding: 3px;'>
							<a href='graph.php?action=zoom&local_graph_id=694&rra_id=0&view_type=tree&graph_start=1304434704&graph_end=1304521104'><img src='images/graph_zoom.gif' border='0' alt='Zoom Graph' title='Zoom Graph' style='padding: 3px;'></a><br>
							<a href='graph_xport.php?local_graph_id=694&rra_id=0&view_type=tree&graph_start=1304434704&graph_end=1304521104'><img src='images/graph_query.png' border='0' alt='CSV Export' title='CSV Export' style='padding: 3px;'></a><br>
							<a href='#page_top'><img src='images/graph_page_top.gif' border='0' alt='Page Top' title='Page Top' style='padding: 3px;'></a><br>
						</td>
					</tr>
				</table>
			</td>
			</tr></table><br><br>			<br>
		</td>
	</tr>
</table>

</body>
</html>

