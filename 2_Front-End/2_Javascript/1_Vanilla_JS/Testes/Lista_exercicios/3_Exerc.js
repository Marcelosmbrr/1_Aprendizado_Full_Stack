function salarioMensal(dados){

    let salarioMes = dados.default == true ? dados.horasDiarias * 30 * dados.valorHora : dados.horasDiarias * 28 * dados.valorHora; 

    return `${dados.nome} recebeu aproxidamente R$ ${salarioMes.toFixed(2)} este mês`;

}

const func = {
    nome: "Fulano",
    horasDiarias: 12,
    valorHora: 23,
    default: false
}

console.log(salarioMensal(func));