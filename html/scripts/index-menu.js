
USETEXTLINKS = 1
STARTALLOPEN = 0
USEFRAMES = 0
USEICONS = 0
WRAPTEXT = 0
PRESERVESTATE = 1
ICONPATH = "images/"

foldersTree = gFld("<b>SLA Menus</b>", "index.html")
	foldersTree.treeID = "SLA"
	index1 = insFld(foldersTree, gFld("Domains", "javascript:undefined"))
		index2 = insFld(index1, gFld("<strong>Englewood/Denver - pod 1</strong>", "index.html?pic=us1-sla"))
		index2 = insFld(index1, gFld("<strong>Englewood/Denver - pod 2</strong>", "index.html?pic=us2-sla"))
		index2 = insFld(index1, gFld("<strong>London/Amsterdam</strong>", "index.html?pic=emea-sla"))
		index2 = insFld(index1, gFld("<strong>Tokyo/Hong Kong</strong>", "index.html?pic=apac-sla"))
		index2 = insFld(index1, gFld("<strong>Sydney</strong>", "index.html?pic=anz-sla"))
		index2 = insFld(index1, gFld("<strong>Auckland</strong>", "index.html?pic=nz-sla"))

