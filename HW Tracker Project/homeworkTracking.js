function addAssignment() {

            //const tbl = document.createElement("table");
            //const tblBody = document.createElement("tbody");


            for (let i = 0; i < 1; i++) {

                const row = document.createElement("tr");
                row.setAttribute("id","row1");
                

                const subjectField = document.createElement("INPUT");
                subjectField.setAttribute("type", "input");
                
                for (let j = 0; j < 1; j++) {

                    const cell1 = document.createElement("td");
                    const cellText1 = document.createTextNode("subjectField");
                    cell1.appendChild(subjectField);
                    row.appendChild(cell1);
                }
                
                const assignmentField = document.createElement("INPUT");
                assignmentField.setAttribute("type", "input");
                
                for (let j = 0; j < 1; j++) {
                    const cell2 = document.createElement("td");
                    const cellText2 = document.getElementById("assignmentField");
                    cell2.appendChild(assignmentField);
                    row.appendChild(cell2);

                }

                const dateField = document.createElement("INPUT");
                dateField.setAttribute("type", "date");

                for (let j = 0; j < 1; j++) {
                    const cell3 = document.createElement("td");
                    const cellText3 = document.getElementById("dateField");
                    cell3.appendChild(dateField);
                    row.appendChild(cell3);
                }


                document.getElementById("body").appendChild(row);
            }


            document.getElementById("tableHeader").appendChild(document.getElementById("body"));
            document.body.appendChild(document.getElementById("tableHeader"));
            document.getElementById("tableHeader").setAttribute("border", "1px", "solid", "black");


        }
        
        window.onload=function greetingFunction(){
            const greeting = document.getElementById("greetingHeader");
            const time = new Date().getHours();
            const welcomeTypes = ["Good morning!","Good afternoon!","Good evening!"];
            let greetingText = " ";
            if (time < 12){
               greetingText=welcomeTypes[0];
            }
            else if (time < 18){
                greetingText=welcomeTypes[1];
            }
            else {
                greetingText=welcomeTypes[2];
            }
            greeting.innerHTML=greetingText;
             
        }
        
        function clearAssignments(){
            document.getElementById("row1").remove();
            
        }

function about(){
    window.alert("This website is intedned for helping students succeed in their classes. It helps them keep track of their assignments so they're completed on time, and also has a feature to help students find each others information to get some extra help if needed!");
}


        