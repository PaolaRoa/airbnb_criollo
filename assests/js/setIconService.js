const icons = document.getElementsByTagName('i');
console.log(icons);

for(i=0; i<icons.length; i++){
    let icon = icons[i];
    let iconId = icon.id;
   if(iconId!= null){
       switch (iconId){
            case '1':
                icon.classList.add('fa-swimmer');
                break;
            case '2':
                icon.classList.add('fa-broom');
                break;
            case '3':
                icon.classList.add('fa-wind');
                break;
            case '4':
                icon.classList.add('fa-shower');
                break;
            case '5':
                icon.classList.add('fa-hot-tub');
                
       }
   }
}