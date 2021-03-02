// route 
var rToProsesLogin = server + "prosesLogin.php";
var rToDashboard = server + "dashboard.php";
// inisialisasi & fungsi
document.querySelector('#txtUsername').focus();

document.querySelector('#btnLogin').addEventListener('click', function(){
    let username = document.querySelector('#txtUsername').value;
    let password = document.querySelector('#txtPassword').value;
    let ds = {'username':username, 'password':password}
    $.post(rToProsesLogin, ds, function(data){
        let obj = JSON.parse(data);
        let statusLogin = obj.status;
        if(statusLogin === 'sukses'){
            window.location.assign(rToDashboard);
        }else{
            pesanUmumApp('warning', 'Failed', 'Login gagal, periksa username & password!!');
            document.querySelector('#txtUsername').focus();
            document.querySelector('#txtPassword').value = "";
        }
    });
});

function pesanUmumApp(icon, title, text)
{
  Swal.fire({
    icon : icon,
    title : title,
    text : text
  });
}