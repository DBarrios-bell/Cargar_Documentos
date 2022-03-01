<html>
<head>
<script>
function validar(frm) {
  frm.sub.disabled = true;
  for (i=0; i<3; i++)
    if (frm['txt'+i].value =='') return
  frm.sub.disabled = false;
}
</script>
</head>
<body>
<form>
<input type="text" name="txt0" onkeyup = "validar(this.form)" />
<input type="text" name="txt1" onkeyup = "validar(this.form)" />
<input type="text" name="txt2" onkeyup = "validar(this.form)" />
<input type="submit" name="sub" disabled="disabled" />
</form>
</body>
</html> 