<html>
   <head>
      <style>
         Table.GridOne {
         padding: 3px;
         margin: 0;
         background: lightyellow;
         border-collapse: collapse; 
         width:45%;
         }
         Table.GridOne Td { 
         padding:2px;
         border: 1px solid #ff9900;
         border-collapse: collapse;
         }
      </style>
      <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
      <script>
         $(function() {
            $('#hide').click(function() {
                     $('td:nth-child(3)').hide();                
            });
         
         $('#show').click(function() {
                     $('td:nth-child(3)').show();                
            });
         $('#toggle').click(function() {
                     $('td:nth-child(3)').toggle();                
            });
         });
      </script>
   </HEAD>
   <body>
      <table class="GridOne">
         <tr>
            <td>Heading 1</td>
            <td>Heading 2</td>
            <td>Heading 3</td>
            <td>Heading 4</td>
         </tr>
         <tr>
            <td>Value 1</td>
            <td>Value 2</td>
            <td>Value 3</td>
            <td>Value 4</td>
         </tr>
         <tr>
            <td>Value 1</td>
            <td>Value 2</td>
            <td>Value 3</td>
            <td>Value 4</td>
         </tr>
      </table>
      <input id="hide" type="button" value="Hide 3rd Column"/> <input id="show" type="button" value="Show 3rd Column"/> <input id="toggle" type="button" value="Toggle 3rd Column"/>
   </body>
</html>