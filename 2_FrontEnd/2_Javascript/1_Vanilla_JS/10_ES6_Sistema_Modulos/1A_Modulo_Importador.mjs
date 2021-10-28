//MÓDULO QUE IMPORTA DADOS*******************************************************************************/
//https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Reference/Statements/import

//O módulo importador é, neste contexto, o que irá importar a exportação de outro
//Obviamente, módulos podem importar e exportar, não se tornando exclusivamente exportadores ou importadores
//A importação deve ocorrer no topo do arquivo de codificação JS, e os dados são descritos entre chaves

//IMPORTAÇÃO DE EXPORTAÇÕES ESPECÍFICAS DE UM MÓDULO
import {objetoExportado} from './1_Modulo_Exportador.mjs';

console.log(objetoExportado.mensagem);

//Importação de todas as exportações de um módulo
//import * from './1_Modulo_Exportador';

//Importação com Alias
import {funcaoExportada as imprimeRandom} from './1_Modulo_Exportador.mjs';
import {FunctionBat} from './1_Modulo_Exportador.mjs';
console.log(imprimeRandom());
FunctionBat();






