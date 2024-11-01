
USETEXTLINKS = 1
STARTALLOPEN = 0
USEFRAMES = 0
USEICONS = 0
WRAPTEXT = 0
PRESERVESTATE = 1
ICONPATH = "images/"

foldersTree = gFld("<b>Site Storage Arrays</b>", "storage.html")
	foldersTree.treeID = "BlueArc"
	aux1 = insFld(foldersTree, gFld("Locations", "javascript:undefined"))
		aux2 = insFld(aux1, gFld("<strong>Englewood</strong>", "storage.html?pic=eng-storage"))
		aux2 = insFld(aux1, gFld("<strong>Denver</strong>", "storage.html?pic=den-storage"))
		aux2 = insFld(aux1, gFld("<strong>Amsterdam</strong>", "storage.html?pic=ams-storage"))
		aux2 = insFld(aux1, gFld("<strong>London</strong>", "storage.html?pic=lon-storage"))
		aux2 = insFld(aux1, gFld("<strong>Tokyo</strong>", "storage.html?pic=tko-storage"))
		aux2 = insFld(aux1, gFld("<strong>Hong Kong</strong>", "storage.html?pic=hk-storage"))
		aux2 = insFld(aux1, gFld("<strong>Sydney</strong>", "storage.html?pic=syn-storage"))
		aux2 = insFld(aux1, gFld("<strong>Auckland</strong>", "storage.html?pic=auk-storage"))

