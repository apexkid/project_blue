{*STORE_ADMIN*}

{load_presentation_object filename="store_admin" assign="obj"}

<html>
	<head>
		<title> Admin Page </title>
		<meta http-equiv = "Content-Type" content="text/html; charset=UTF-8" />
		
		<link href="styles/bootstrap/js/google-code-prettify/prettify.css" rel="stylesheet" type="text/css" />
		<link href="styles/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="styles/bootstrap/css/docs.css" rel="stylesheet" type="text/css" />
		<link href="styles/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
		<link href="styles/navigation/ddsmoothmenu.css" rel="stylesheet" type="text/css" />
		
	</head>
	
	<body>
	
		<div class = "span10" >
			{include file = $obj->mContentCell}
		</div>
		
		<div class = "span8" >
			{include file = $obj -> mBlock}
		</div>
	</body>
</html>