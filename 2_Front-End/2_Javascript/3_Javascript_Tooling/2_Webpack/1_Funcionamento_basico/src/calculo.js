export default class Soma {

    somaNumeros(a, b){

        const header = document.createElement("header");
        header.style.width = "100%";
        header.style.height = "150px";
        header.style.display = "flex";
        header.style.justifyContent = "center";
        header.style.alignItems = "center";
        document.querySelector("body").appendChild(header);

        const tittle = document.createElement("h1");
        header.appendChild(tittle);

    }
}
