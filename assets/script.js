



function cook_edit_form(id,text) {


//var ba = JSON.parse(ar);

var editForm = "<form action='index.php' method='post'> <input type='textarea' name='edited' value='"+text+"'>\
 <input type='hidden' name='edit' value='"+id+"'><input type='submit' value='OK'> </form>";
var temp = document.createElement('div');
temp.innerHTML=editForm;

var home = document.getElementById(id);
home.appendChild(temp);

console.log(id);





}
