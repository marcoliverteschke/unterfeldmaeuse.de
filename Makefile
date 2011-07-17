LOCALHTDIR=/Applications/MAMP/htdocs

local-init:
	rm -Rf $(LOCALHTDIR)
	rsync -aP core/ $(LOCALHTDIR)

local:
	rsync -aP custom/local.settings.php $(LOCALHTDIR)/sites/default/settings.php
	rsync -aP custom/modules/ $(LOCALHTDIR)/modules
	rsync -aP custom/themes/ $(LOCALHTDIR)/themes
