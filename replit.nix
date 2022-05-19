{ pkgs } : {
	deps = [
		pkgs.nodejs-16_x
		pkgs.python39Full
		pkgs.pstree
		pkgs.zip
		pkgs.unzip
	];
}