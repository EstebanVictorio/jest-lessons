function sum(...numbers){
    return numbers.reduce((total,number)=> total + number);
}

export default sum;