LOCALHTDIR=/Applications/MAMP/htdocs/unterfeldmaeuse.de

local-init:
	rsync -aP --exclude=files core/ $(LOCALHTDIR)

local:
	rsync -aP custom/local.settings.php $(LOCALHTDIR)/sites/default/settings.php
	rsync -aP custom/modules/ $(LOCALHTDIR)/modules
	rsync -aP custom/themes/ $(LOCALHTDIR)/themes
