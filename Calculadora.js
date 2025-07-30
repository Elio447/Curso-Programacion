const opcion =prompt ("Elige una opcion \n1. suma\n2. resta\n3. multiplicacion\n4. division\n 5. modulo\n 6. exponenciacion\n 7. raiz cuarada\n 8. cociente\n ")

switch (opcion) {
    case"1":
    let numero_1  = prompt ("Coloca el primer numero: ")
    let numero_2 = Number (numero_1)
    let numero_11 = prompt ("Coloca el segundo numero: ")
    let numero_22 = Number (numero_11)
    let suma = numero_2 + numero_22;
    console.log(`suma: ${suma}`)
        break;

    case"2":
    let numero_1_1 = prompt ("Coloca el primer numero: ")
    let numero_2_2 = Number (numero_1_1)
    let numero_1_11 = prompt("Coloca el segundo numero: ")
    let numero_2_22 = Number (numero_1_11)
    let resta = numero_1_1 - numero_2_22;
    console.log(`resta: ${resta}`)
        break;
    case"3":
    let numero1 = prompt ("Coloca el primer numero: ")
    let numero2 = Number (numero1)
    let numero11 = prompt ("Colocar el segundo numero: ")
    let numero22 = Number (numero11)
    let multiplicacion = numero2 * numero22;
    console.log(`multiplicacion: ${multiplicacion}`)
        break;
    case"4":
    let numero3 = prompt ("Coloca el primer numero: ")
    let numero4 = Number (numero3)
    let numero33 = prompt ("Colocar el segundo numero: ")
    let numero44 = Number (numero33)
    let division = numero2 / numero22;
    console.log(`division: ${division}`)
        break;
    case"5":
    let numero5 = prompt ("Coloca el primer numero: ")
    let numero6 = Number (numero5)
    let numero55 = prompt ("Colocar el segundo numero: ")
    let numero66 = Number (numero55)
    let modulo = numero6 % numero66;
    console.log(`modulo: ${modulo}`)
        break;
    case"6":
    let numero7 = prompt ("Coloca el primer numero: ")
    let numero8 = Number (numero7)
    let numero77 = prompt ("Colocar el segundo numero: ")
    let numero88 = Number (numero77)
    let exponenciacion= numero8 ** numero88;
    console.log(`exponenciacicon: ${exponenciacion}`)
        break;
    case"7":
    let numero9 = prompt ("Coloca el numero del que buscas la raiz cuadrada: ")
    let numero10 = Number (numero9)
    let raiz_cuarada = numero10 ** 0.5;
    console.log(`raiz cuadrada: ${raiz_cuarada}`)
        break;
    case"8":
    let numero11_1 = prompt ("Coloca el dividendo: ")
    let numero12 = Number (numero11_1)
    let numero1111 = prompt ("Colocar el divisor: ")
    let numero2222 = Number (numero1111)
    let cociente = numero12 / numero2222;
    console.log(`cociente: ${cociente}`)
        break;
    default:
        console.log(`No es una entrada reconocida, intenta de nuevo`)
        break;
}
