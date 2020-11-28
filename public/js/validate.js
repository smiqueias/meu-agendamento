function validate() {
    
    const username = document.getElementById("input_username").value;
    const password = document.getElementById("input_password").value;

    if (username != 'admin' || password != '123') {
        swal({
            title: "Não foi possível validar o seu acesso",
            icon: "warning"
        })
        return false;
    }
}