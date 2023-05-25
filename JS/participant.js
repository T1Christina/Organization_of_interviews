    var nameParts = [];
    var SurnameParts = [];
    var timeStart = [];
    var timeEnd = [];
    
    function AddPart() { 

        // Получение данных об участнике //

        let namePart = document.querySelector('.partName ').value;
        nameParts.push(namePart); 
        console.log(nameParts);

        let SurnamePart = document.querySelector('.partSurname').value;
        SurnameParts.push(SurnamePart);
        console.log(SurnameParts); 


        let TimeStart = document.querySelector('.partStartTime').value;
        timeStart.push(TimeStart); 
        console.log(timeStart);

        let TimeEnd = document.querySelector('.partEndTime').value;
        timeEnd.push(TimeEnd);
        console.log(timeEnd);


        // Добавление участника 

        let OneLine = document.createElement('div');
        OneLine.setAttribute('class', 'vacancy');
        OneLine.setAttribute('id', 'vacancy');

            let Cross = document.createElement('div');
            Cross.setAttribute('class', 'symbols cross'); 
            
            let NameParticipant = document.createElement('p');
            NameParticipant.innerHTML += namePart + ' ' + SurnamePart;

        let DivPart2 = document.createElement('div');
        DivPart2.setAttribute('class', 'Number_time');
        DivPart2.setAttribute('id', 'Number_time');

            let TimeParticipant = document.createElement('p');
            TimeParticipant.innerHTML = "Свободное время: ";

            let TimeParticipant2 = document.createElement('p');
            TimeParticipant2.setAttribute('class', 'text_time'); 
            TimeParticipant2.setAttribute('id', 'text_time');

                let TimeOutputtart = document.createElement('output');
                TimeOutputtart.innerHTML += TimeStart + ' - ';

                let TimeOutputtart2 = document.createElement('output'); 
                TimeOutputtart2.innerHTML += TimeEnd;

    let Vacancies = document.querySelector('vacancies');
        vacancies.appendChild(OneLine); 
        vacancies.appendChild(DivPart2);

        let Vacancy = document.querySelector('vacancy'); 
            OneLine.appendChild(Cross); 
            OneLine.appendChild(NameParticipant);

        let NumberTime = document.querySelector('Number_time');
            DivPart2.appendChild(TimeParticipant);
            DivPart2.appendChild(TimeParticipant2);  

                let textTime = document.querySelector('text_time');
                    TimeParticipant2.appendChild(TimeOutputtart);
                    TimeParticipant2.appendChild(TimeOutputtart2);  

                    

        $.ajax({
            url: '/PHP/add-job.php',
            type: 'POST',
            datatype : 'application/json',
            data: {
                nameParts: nameParts,
                SurnameParts: SurnameParts,
                timeStart: timeStart,
                timeEnd: timeEnd

            },
            success: function(response){
                console.log(response);
            }, 
            error: function() {
                console.log('error');
            }
        });
        
    }
