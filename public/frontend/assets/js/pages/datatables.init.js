$(document).ready(function(){
    $("#datatable").DataTable();
    $("#datatable-buttons").DataTable({
        "processing":true,
        "serverSide":true,
         "ajax":{
           url:"list_doctors.php",
           type:"POST"
         },
        "lengthChange":!1,
        "buttons":["copy","excel","pdf"]});
        $("#patients-datatable-buttons").DataTable({
            "processing":true,
            "serverSide":true,
             "ajax":{
               url:"list_patients.php",
               type:"POST"
             },
            "lengthChange":!1,
            "buttons":["copy","excel","pdf"]});
            
            $("#appointments-datatable-buttons").DataTable({
              "processing":true,
              "serverSide":true,
               "ajax":{
                 url:"list_appointments.php",
                 type:"POST"
               },
              "lengthChange":!1,
              "buttons":["copy","excel","pdf"]});
              $("#records-datatable-buttons").DataTable({
                "processing":true,
                "serverSide":true,
                 "ajax":{
                   url:"list_records.php",
                   type:"POST"
                 },
                "lengthChange":!1,
                "buttons":["copy","excel","pdf"]});

               
              

    })