function validaHotel() {
    if (document.hotel.nomeHotel.value == "" ||
            document.hotel.endereco.value == "") {
        alert("Preencher todos os campos obrigatórios!!");
        return false;
    }
    else
        return true;
}
function validaRoom() {
    if (document.room.quarto.value == "" ||
            document.room.vagas.value == "" ||
            document.room.idHotel.value == "") {
        alert("Preencher todos os campos obrigatórios!!");
        return false;
    }
    else
        return true;
}
function validaCadastro() {
    if (document.cadastro.nomeCompleto.value == "" ||
            document.cadastro.nomeCracha.value == "" ||
            document.cadastro.telefone.value == "" ||
            document.cadastro.email.value == "" ||
            document.cadastro.cpf.value == "" ||
            document.cadastro.idEj.value == "" ||
            document.cadastro.estado.value == "" ||
            document.cadastro.ej.value == "" ||
            document.cadastro.cargo.value == "" ||
            document.cadastro.federacao.value == "" ||
            document.cadastro.tempoMej.value == "" ||
            document.cadastro.idQuarto.value == "") {
        alert("Preencher todos os campos obrigatórios!!");
        return false;
    }
    else {
        if (document.cadastro.senha.value == "") {
            alert("Digite uma senha!");
            return false;
        }
        else {
            return true;
        }
    }
}
function validaEvent() {
    if (document.programacao.nomeProgramacao.value == "" ||
            document.programacao.descricao.value == "" ||
            document.programacao.horario.value == "" ||
            document.programacao.numVagas.value == "") {
        alert("Preencher todos os campos obrigatórios!!");
        return false
    }
    else
        return true;

}
