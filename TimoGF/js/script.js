

//função que verifica se o campo nome possue mais de uma palavra


function getLength() {

    getWord = document.getElementById( 'nome' ).value,
        num = document.getElementById( 'demo2' );

    if ( getWord == '' ) num.textContent = '';
    else if ( getWord.search( /\s[a-z0-9]+$/gi ) > -1 ) num.textContent = getWord.split( ' ' ).length;
    else if ( getWord.search( /[^\s]$/ ) > -1 ) num.textContent = '1';

    //caso possua uma palavra é exibido uma mensagem
    if(num.textContent == 1 || num.textContent < 2)document.getElementById("demo2").innerHTML = "O formulário está inválido!" ;

    //caso contrário não imprime nada na tela

    else{
        document.getElementById("demo2").innerHTML = "" ;

    }
}
