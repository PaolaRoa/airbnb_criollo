const startDate = document.getElementById("start-date");
const finalDate = document.getElementById("ending-date");
console.log(startDate, finalDate);

startDate.addEventListener("change", ()=>validateStartDate());

validateStartDate= ()=>{
    let start = new Date(startDate.value);
    let end = new Date(finalDate.value);
    let year = validateDigits(start.getFullYear());
    //adds one because motnhs bgins on 0 for january
    let month = validateDigits(start.getMonth()+1);
    //ads one to set one day after on end date
    let day = validateDigits(start.getDate()+2);
    //console.log(typeof(year));
    //console.log(year, month, day);
    let minDate = `${year}-${month}-${day}`;
    finalDate.value = minDate;
    finalDate.setAttribute('min',minDate);
}
//adds zero when needed
validateDigits=(digit)=>{
    if(digit<10){
        digit = `0${digit}`;
    }
    return digit;
}

