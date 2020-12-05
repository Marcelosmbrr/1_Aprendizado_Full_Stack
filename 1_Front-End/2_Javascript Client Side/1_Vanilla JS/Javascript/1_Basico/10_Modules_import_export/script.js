//Este é o arquivo que está importando as estruturas exportadas
//É claro que o Import e o Export podem ser realizados livremente, em qualquer arquivo
//Mas para fins de exemplo, este aqui irá apenas importar as exportações dos outros

//Este Import é feito com o exato mesmo nome da estrutura exportada com Export
import {areaQuadrado, perimetroQuadrado} from "./Export_not_default.js";

//Este Import admite qualquer nomenclatura, pois a estrutura importada foi exportada com Export Default
import aleatorio from "./Export_default.js";

console.log(areaQuadrado(10));
console.log(perimetroQuadrado(10));
console.log(aleatorio());