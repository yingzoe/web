<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Article</title>
<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
a:link {
  color: #191970;
}

a:hover, a:active {
  text-decoration: none;
  color:#191970;
}

a:visited {
  color: #191970;
}
</style>
</head>

<body>
<table width="100%" height="520" border="0" cellpadding="8" cellspacing="1" bgcolor="#000000">
  <tr>
    <td height="89" colspan="2" bgcolor="#E6E6FA"><strong>Back stage</strong></td>
  </tr>
  <tr>
    <td width="156" height="287" align="left" valign="top" bgcolor="#E6E6FA"><p><a href="article.add.php">Post articals</a></p>
    <p><a href="article.manage.php">Manage articles</a></p>      <a href="article.add.php"></a></td>
    <td width="837" valign="top" bgcolor="#FFFFFF">
    <form id="form1" name="form1" method="post" action="article.add.handle.php">
      <table width="779" border="0" cellpadding="8" cellspacing="1">
        <tr>
          <td colspan="2" align="center">Post articles</td>
          </tr>
        <tr>
          <td width="119">Title</td>
          <td width="625"><label for="title"></label>
            <input type="text" name="title" id="title" /></td>
        </tr>
        <tr>
          <td>Author</td>
          <td><input type="text" name="author" id="author" /></td>
        </tr>
        <tr>
          <td>Description</td>
          <td><label for="description"></label>
            <textarea name="description" id="description" cols="60" rows="5"></textarea></td>
        </tr>
        <tr>
          <td>Content</td>
          <td><textarea name="content" cols="60" rows="10" id="content"></textarea></td>
        </tr>
        <tr>
          <td colspan="2" align="right"><input type="submit" name="button" id="button" value="Submit" /></td>
          </tr>
      </table>
    </form></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#E6E6FA"><strong>Copyright</strong></td>
  </tr>
</table>
</body>
</html>
