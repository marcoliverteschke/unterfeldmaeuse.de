LOCALHTDIR=/Applications/MAMP/htdocs/unterfeldmaeuse.de

update:
	git pull origin master

commit: update
	git add ./*
	git commit
	git push origin master

local-init:
	rsync -aP --exclude=files core/ $(LOCALHTDIR)

local:
	rsync -aP custom/local.settings.php $(LOCALHTDIR)/sites/default/settings.php
	rsync -aP custom/modules/ $(LOCALHTDIR)/modules
	rsync -aP custom/themes/ $(LOCALHTDIR)/themes
