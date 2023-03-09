const formLogin = document.getElementById("form-login")

if(formLogin) {
    formLogin.addEventListener("submit", async (e) => {
        e.preventDefault();
        
        const dadosForm = new FormData(formLogin);

        const dados = await fetch("../index.php", {
            method: "POST",
            body: dadosForm
        });

        const resposta = await dados.json();
        console.log(resposta);

        if(resposta['status']){

        }else {
            Swal.fire({
                text: resposta['msg'],
                icon: 'error',
                showCancelButton: true,
                confirmButtonColo: '#3085d6',
                confirmButtonText: 'Fechar'
              });
        }

    });

}


// function alerta() {
//     Swal.fire('Sucesso', 'Usuario logado com sucesso!', 'success');
// }

// alerta();