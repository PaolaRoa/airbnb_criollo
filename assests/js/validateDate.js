const startDate = document.getElementById("start-date");
const finalDate = document.getElementById("ending-date");
console.log(startDate, finalDate);

startDate.addEventListener("change", ()=>validateStartDate());

validateStartDate= ()=>{
    let start = new Date(startDate.value);
    let end = new Date(finalDate.value);
    let year = start.getFullYear();
    //adds one because motnhs bgins on 0 for january
    let monthDigit = start.getMonth()+1;
    //let month= validateDigits(validateMonth(monthDigit))
    //ads one to set one day after on end date
    let dayDigit = start.getDate()+2;
    let date = validateDay(dayDigit, monthDigit, year);
    //console.log(date);
    //console.log(year, month, day);
    let minYear = date[0];
    let month = validateMonth(date[1]);
    let minMonth = validateDigits(month);
    let minDay = validateDigits(date[2]);
    let minDate = `${minYear}-${minMonth}-${minDay}`;
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

validateMonth= (month)=>{
    if(month >12){
        month = month%12
    }
    return month;
}

validateDay=(day, month, year)=>{
    if(month == 1 || month == 3 || month == 5 || month == 7 || month == 8 
        || month == 10 || month == 12){
            if(day>31){
                day = day%31;
                month +=1;
                if(month == 12){
                    year += 1;
                }
            }
            
    }
    else if (month == 4 || month == 6|| month == 9 || month == 11){
        if(day>30){
            day = day%30;
            month +=1;
        }
    }
    else if (month==2 && validateYear(year)== 1){
        if(day>29){
            day = day%29;
            month +=1;
        }
        }
    else if (month==2 && validateYear(year)== 0){
            if(day>28){
                day = day%28;
                month +=1;
            }
    }
    let date = [year,month, day]
    return date;

}
validateYear=(year)=>{
    let bisiesto= 0;
    if (((year % 4 == 0) && (year % 100 != 0 )) || (year % 400 == 0)){
        bisiesto = 1;
      }
    return bisiesto;
}
