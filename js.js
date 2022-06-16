
function form1() {
    let group = document.getElementById("group").value;
    let result = sessionStorage.getItem(group);
    document.getElementById('group').innerHTML;
    document.getElementById('res').innerHTML = result; 
}
function form2() {
    let teacher = document.getElementById("teacher").value;
    let disciple = document.getElementById("disciple").value;
    let key = teacher + "&" + disciple; 
    let result = sessionStorage.getItem(key);
    document.getElementById('teacher').innerHTML;
    document.getElementById('res').innerHTML = result;
}
function form3(){
    let auditorium = document.getElementById("auditorium").value;
    let result = sessionStorage.getItem(auditorium);
    document.getElementById('auditorium').innerHTML;
    document.getElementById('res').innerHTML = result;
}