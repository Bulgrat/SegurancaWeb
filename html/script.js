const api_url = "http://localhost:8080/api/ler.php";

fetch(api_url)
  .then((data) => {
      let res;
      console.log(data.body);
  })
  .catch(function (error) {
    console.log(error);
  });

// getapi(api_url);

// function hideloader() {
//   document.getElementById("loading").style.display = "none";
// }

// function show(data) {
//   let tab = `<tr>
//           <th>Name</th>
//           <th>Office</th>
//           <th>Position</th>
//           <th>Salary</th>
//          </tr>`;

//   // Loop to access all rows
//   for (let r of data.list) {
//     tab += `<tr> 
//     <td>${r.name} </td>
//     <td>${r.office}</td>
//     <td>${r.position}</td> 
//     <td>${r.salary}</td>          
//     </tr>`;
//   }
//   // Setting innerHTML as tab variable
//   document.getElementById("employees").innerHTML = tab;
// }
