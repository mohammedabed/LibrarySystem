webpackJsonp([1],{0:function(a,e,t){(function(a){"use strict";t(147),t(150),t(148),t(149),t(151);a(".pagination").addClass("pagination-sm no-margin"),a("[data-toggle=popover]").popover()}).call(e,t(2))},128:function(a,e,t){(function(e){"use strict";a.exports={autoComplete:function(a,t,o,r){var s="/admin/"+t+"/search?q=",n=e(a);n.typeahead({minLength:3,delay:1e3,source:function(a,t){return e.get(s+a,function(a){return t(a.result)})},displayText:o,autoSelect:!0,updater:r})}}}).call(e,t(2))},147:function(a,e,t){(function(a){"use strict";function e(e){a(".date-picker").attr("value",a(this).val())}var t=a(".date-picker").length;t>0&&a(".date-picker").datepicker({format:"d MM yyyy",maxViewMode:3,todayBtn:"linked",clearBtn:!0,todayHighlight:!0}).change(e).on("changeDate",e)}).call(e,t(2))},148:function(a,e,t){(function(a){"use strict";var e=a(".author-form, .publisher-form").length;e>0&&a.get("/admin/countries",function(e){var t=a("#aCountry");t.attr("disabled",!1),t.attr("placeholder","Country"),a("#faCountry").removeClass("fa-spinner"),a("#faCountry").removeClass("fa-pulse"),a("#faCountry").addClass("fa-globe"),t.typeahead({minLength:2,delay:0,source:e.result,displayText:function(a){return a.name},autoSelect:!0})})}).call(e,t(2))},149:function(a,e,t){(function(a){"use strict";var e=a("#search-book").length,o=t(128);if(e>0){a("#borrow-now").val(0);var r=function(a){var e="",t="";"0"===a.copyStatus&&(e=" [not available]",t="text-muted");var o=a.title+" - "+a.edition+" ("+a.bookCode+") - By "+a.authorName+e;return o},s=a("#search-book"),n=function(e){return a("#selected-book-id").val(e.id),a("#selected-book-copy-id").val(e.copyId),a("#selected-book-status").val(e.copyStatus),a("#selected-book-title").val(e.title),a("#selected-book-code").val(e.bookCode),a("#selected-book-edition").val(e.edition),a("#selected-book-author").val(e.authorName),e};o.autoComplete(s,"book",r,n),a("#btn-add-to-borrow").click(function(){var e=parseInt(a("#selected-book-status").val());if(0==e){var t='<div class="alert alert-warning alert-dismissible fade in" role="alert">';return t+=' <button type="button" class="close" data-dismiss="alert" aria-label="Close">',t+='<span aria-hidden="true">×</span></button>',t+=" <strong>Sorry! </strong> This book is already checked out by someone else!",t+="</div>",a("#message").append(t),0}var o=a("#max-limit-now").val(),r=parseInt(a("#borrow-now").val());if(r<o){a("#message div").remove();var s='<tr id="row-'+a("#selected-book-copy-id").val()+'">';s+="<td>"+a("#selected-book-code").val()+"</td>",s+='<input type="hidden" class="selected-book" value="'+a("#selected-book-copy-id").val()+'"/>',s+="<td>"+a("#selected-book-title").val()+" - "+a("#selected-book-edition").val()+"</td>",s+="<td>"+a("#selected-book-author").val()+"</td>",s+='<td><button class="btn btn-sm btn-link remove-book" type="button" value="'+a("#selected-book-copy-id").val()+'"><i class="fa fa-close"></i></button></td>',s+="</tr>",a("#book-borrow-list").append(s),l(),a("#search-book").val(""),a("#search-book").focus()}else alert("You've reached your Maximum Limit")});var l=function(){var e=parseInt(a("#borrow-now").val());e+=1,a("#borrow-now").val(e),a("#show-current-total").html(parseInt(e)+" books selected."),i(e)},i=function(e){var t=parseInt(a("#max-limit-now").val());a("#max-limit-badge").html(t-e),e>0?a("#borrow-books").attr("disabled",!1):a("#borrow-books").attr("disabled",!0)};a("#book-borrow-list").on("click",".remove-book",function(){var e=a(this).val();a("#row-"+e).remove(),u()});var u=function(){var e=parseInt(a("#borrow-now").val());e-=1,a("#borrow-now").val(e),a("#show-current-total").html(parseInt(e)+" books selected."),i(e)};a("#borrow-books").click(function(){var e=a("#token").val(),t=[];a(".selected-book").each(function(e){t.push(a(this).val())}),a(this).attr("disabled",!0),a.ajax({method:"POST",url:"/admin/borrow",data:{books:t,_token:e},success:function(e,t,o){if(201==o.status){var r='<div class="alert alert-success alert-dismissible fade in" role="alert">';r+=' <button type="button" class="close" data-dismiss="alert" aria-label="Close">',r+='<span aria-hidden="true">×</span></button>',r+=" <strong>Success! </strong> Books are checked-out successfully.",r+="</div>",a("#message").append(r),a("#book-borrow-list tr").remove(),a("#show-current-total").html("0"),a("#borrow-books").attr("disabled",!0),c()}else{var r='<div class="alert alert-warning alert-dismissible fade in" role="alert">';r+=' <button type="button" class="close" data-dismiss="alert" aria-label="Close">',r+='<span aria-hidden="true">×</span></button>',r+=' <strong><i class="fa fa-warning"></i>! </strong> Something went wrong.',r+="</div>",a("#message").append(r)}},error:function(e,t){var o='<div class="alert alert-danger alert-dismissible fade in" role="alert">';o+=' <button type="button" class="close" data-dismiss="alert" aria-label="Close">',o+='<span aria-hidden="true">×</span></button>',o+=' <strong><i class="fa fa-warning"></i>! </strong> There\'s some error.',o+="</div>",a("#message").append(o)}})});var c=function(){var e=parseInt(a("#borrow-now").val()),t=parseInt(a("#current-loan").val()),o=parseInt(a("#max-limit-now").val());a("#max-limit-badge").html(o-e),a("#max-limit-now").val(o-e),a("#current-loan").val(t+e),a("#current-loan-badge").html(t+e),a("#borrow-now").val(0)};a(document).ajaxStart(function(){a("#borrow-fa").removeClass("fa-plus"),a("#borrow-fa").addClass("fa-spinner"),a("#borrow-fa").addClass("fa-pulse")}),a(document).ajaxComplete(function(){a("#borrow-fa").addClass("fa-plus"),a("#borrow-fa").removeClass("fa-spinner"),a("#borrow-fa").removeClass("fa-pulse")})}}).call(e,t(2))},150:function(a,e,t){(function(a){"use strict";var e=a(".book-form").length;console.log("book form: ",e);var o=t(128);if(e>0){var r=a("#token").val(),s=a("#book-id").val(),n=function(a){return a.name+" ("+a.country+")"},l=a("#bookAuthor1"),i=function(e){return a("#author1").val(e.id),e};o.autoComplete(l,"author",n,i);var u=a("#bookAuthor2"),c=function(e){return a("#author2").val(e.id),e};o.autoComplete(u,"author",n,c);var d=a("#bookAuthor3"),b=function(e){return a("#author3").val(e.id),e};o.autoComplete(d,"author",n,b);var v=a("#bookPublisher"),f=function(e){return a("#publisherId").val(e.id),e};o.autoComplete(v,"publisher",n,f),a(".clear-author").click(function(){var e=a(this).val(),t=a("#author"+e).val();a("#author"+e).val(""),a("#bookAuthor"+e).val(""),a.ajax({url:"/admin/book/"+s+"/author/"+t,type:"DELETE",data:{_token:r}})});var p=function(a){return a.title+" ("+a.categoryCode+")"},m=a("#bookCategory1"),h=function(e){return a("#category1").val(e.id),e};o.autoComplete(m,"category",p,h);var k=a("#bookCategory2"),g=function(e){return a("#category2").val(e.id),e};o.autoComplete(k,"category",p,g);var w=a("#bookCategory3"),y=function(e){return a("#category3").val(e.id),e};o.autoComplete(w,"category",p,y),a(".clear-category").click(function(){var e=a(this).val(),t=a("#category"+e).val();a("#category"+e).val(""),a("#bookCategory"+e).val(""),a.ajax({url:"/admin/book/"+s+"/category/"+t,type:"DELETE",data:{_token:r}})}),a(document).ajaxStart(function(){a("#publiserLabel").html('Publisher <i class="fa fa-spinner fa-pulse"></i>')}),a(document).ajaxComplete(function(){a("#publiserLabel").html("Publisher")})}}).call(e,t(2))},151:function(a,e,t){(function(a){"use strict";var e=a("#book-return").length;e>0&&(a(".btn-book-return").attr("disabled",!1),a(".btn-book-return").click(function(){var e=a("#token").val(),t=a(this).val(),o=a("#fine-for-"+t).val();a(this).html('<i class="fa fa-spinner fa-plus"></i> Processing'),a(this).attr("disabled",!0),a.ajax({method:"POST",url:"/return-books/"+t,data:{_token:e,fine:o},success:function(e,o,r){if(200==r.status){var s='<div class="alert alert-success alert-dismissible fade in" role="alert">';s+=' <button type="button" class="close" data-dismiss="alert" aria-label="Close">',s+='<span aria-hidden="true">×</span></button>',s+=" <strong>Success! </strong> Books are returned successfully.",s+="</div>",a("#message").append(s),a("#reservation-id-"+t).remove()}else{var s='<div class="alert alert-warning alert-dismissible fade in" role="alert">';s+=' <button type="button" class="close" data-dismiss="alert" aria-label="Close">',s+='<span aria-hidden="true">×</span></button>',s+=' <strong><i class="fa fa-warning"></i>! </strong> Something went wrong.',s+="</div>",a("#message").append(s)}},error:function(e,t){var o='<div class="alert alert-danger alert-dismissible fade in" role="alert">';o+=' <button type="button" class="close" data-dismiss="alert" aria-label="Close">',o+='<span aria-hidden="true">×</span></button>',o+=' <strong><i class="fa fa-warning"></i>! </strong> There\'s some error.',o+="</div>",a("#message").append(o)}})}),a(document).ajaxStart(function(){a("#borrow-fa").removeClass("fa-plus"),a("#borrow-fa").addClass("fa-spinner"),a("#borrow-fa").addClass("fa-pulse")}),a(document).ajaxComplete(function(){a("#borrow-fa").addClass("fa-plus"),a("#borrow-fa").removeClass("fa-spinner"),a("#borrow-fa").removeClass("fa-pulse")}))}).call(e,t(2))}});