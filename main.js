function addRowHandlers() {
    var table = document.getElementById("messagest");
    var rows = table.getElementsByTagName("tr");
    for (i = 1; i < rows.length; i++) {
        row = table.rows[i];
        row.onclick = function(){
                          var cell = this.getElementsByTagName("td")[0];
                          var id = cell.innerHTML;
						  window.location.replace("mail.php?q="+id);
                          };
         }
}

window.onload = function(){
	addRowHandlers();
}