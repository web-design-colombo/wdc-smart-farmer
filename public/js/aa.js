
$(document).ready(function(){
					 $("ul#sidemenu li a").click(function(e){
						if (!$(this).hasClass("active")) {
								var tabNum = $(this).index();
								var nthChild = tabNum+1;
							$("ul#sidemenu li a.active").removeClass("active");
							$(this).addClass("active");
							$("ul#Contenttab1 li.selected").removeClass("selected");
							$("ul#Contenttab1 li:nth-child("+nthChild+")").addClass("selected");
						}
					});

                                });
