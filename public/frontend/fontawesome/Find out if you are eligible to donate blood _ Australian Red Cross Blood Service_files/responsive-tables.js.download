// jQuery(document).ready(function() {
//     var switched = false;

//     var updateTables = function() {
//         if ((jQuery(window).width() <= 1024) && !switched)
//         {
//             switched = true;

//             jQuery("table.responsive").each(function(i, element){
//                 splitTable(jQuery(element));
//             });

//             return true;
//         } 
//         else if (switched && (jQuery(window).width() > 1024))
//         {
//             switched = false;

//             jQuery("table.responsive").each(function(i, element){
//                 unsplitTable(jQuery(element));
//             });
//         }
//     };

//     jQuery(window).load(updateTables);

//     jQuery(window).bind("resize", updateTables);

//     function splitTable(original) 
//     {
//         original.wrap("<div class='table-wrapper' />");
//         var copy = original.clone();
//         copy.find("td:not(:first-child), th:not(:first-child)").css("display", "none");
//         copy.removeClass("responsive");
//         original.closest(".table-wrapper").append(copy);
//         copy.wrap("<div class='pinned' />");
//         original.wrap("<div class='scrollable' />");
//     }

//     function unsplitTable(original)
//     {
//         original.closest(".table-wrapper").find(".pinned").remove();
//         original.unwrap();
//         original.unwrap();
//     }
// });
