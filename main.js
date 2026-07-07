isLoggedIn=0
function request(method,url,success,data){if(!method)method='GET'
if(!url)return
var xhttp=new XMLHttpRequest()
xhttp.onreadystatechange=function(){if(this.readyState==4&&this.status==200){success&&success(this.responseText)}}
xhttp.open(method,url,true)
if(method==='POST'){xhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded')}
xhttp.send(serialize(data))}
function serialize(obj){var str=[]
for(var p in obj)
if(obj.hasOwnProperty(p)){str.push(encodeURIComponent(p)+'='+ encodeURIComponent(obj[p]))}
return str.join('&')}
function getCookie(cn){var name=cn+"=";var allCookie=decodeURIComponent(document.cookie).split(';');var cval=[];for(var i=0;i<allCookie.length;i++){if(allCookie[i].trim().indexOf(name)==0){cval=allCookie[i].trim().split("=");}}
return(cval.length>0)?cval[1]:"";}
function checkLogin(){var userId=getCookie('fbUser');if(userId){request('POST','/api/users/me',function(response){var r=JSON.parse(response)
if(r&&r.status=='success'){var evt=new CustomEvent('login',{detail:r.data.user});document.dispatchEvent(evt)}})}else{var evt=new CustomEvent('nologin',{});document.dispatchEvent(evt)
console.log('not logged in')}};(function(){;(function(){var $searchbars=document.querySelectorAll('input.search-bar')
var $autocompleteSuggestions=document.getElementById('autocomplete-suggestions')
var cache={}
for(var i=0;i<$searchbars.length;i++){var $searchbar=$searchbars[i]
$searchbar.oninput=function(){var $searchbar=this
var term=$searchbar.value
if(!term||term.length<2)return($autocompleteSuggestions.style.display='none')
if(cache[term])return renderAutocomplete($searchbar,term,cache[term])
else
request('GET','/api/autocomplete?term='+ encodeURIComponent(term),function(response){renderAutocomplete($searchbar,term,response)})}}
function formatResult($searchbar,suggestion,currentValue){var value=suggestion.value
if(!currentValue)return value
try{var pattern='('+ currentValue.replace(/\(/,'\\(').replace(/\)/,'\\)')+')'
value=value.replace(new RegExp(pattern,'i'),'<span>$1</span>')}catch(e){}
try{value=value.replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;').replace(/"/g,'&quot;').replace(/&lt;(\/?span)&gt;/g,'<$1>')}catch(e){}
if((suggestion.value&&suggestion.value.toLowerCase())===(currentValue&&currentValue.toLowerCase()))
selectPerson($searchbar,currentValue)
return value}
function selectPerson($currSearchbar,value){for(var i=0;i<$searchbars.length;i++){var $searchbar=$searchbars[i]
$searchbar.value=value}
document.getElementById('fb_search').submit()}
function renderAutocomplete($searchbar,term,response){var hasSuggestions=false
var suggestions
try{suggestions=JSON.parse(response).suggestions}catch(e){return console.error('Could not parse autocomplete suggestions',suggestions)}
cache[term]=response
$autocompleteSuggestions.innerHTML=''
for(var index in suggestions){hasSuggestions=true
var child=document.createElement('div')
child.classList=['autocomplete-suggestion']
child.innerHTML=formatResult($searchbar,suggestions[index],term)
child.onclick=function(){selectPerson($searchbar,this.innerText)}
if(child.dataset)child.dataset.index=index
$autocompleteSuggestions.appendChild(child)}
if(hasSuggestions){var rect=$searchbar.getBoundingClientRect()
$autocompleteSuggestions.style.display='block'
$autocompleteSuggestions.style.top=rect.bottom+'px'
$autocompleteSuggestions.style.left=rect.left+'px'
$autocompleteSuggestions.style.width=rect.width+'px'}else{$autocompleteSuggestions.style.display='none'}}})();(function(){try{var $boost=document.getElementById('btn-boost')
$boost.onclick=function(e){e.preventDefault()
request('POST','/api/people/boost',function(r){$boost.onclick=function(){}
$boost.classList.add('boosted')
$boost.classList.add('disabled')},{url:$boost.dataset.url})}}catch(e){}
try{document.getElementById('btn-edit').onclick=function(e){e.preventDefault()
document.getElementById('edit-form').submit()}}catch(e){}
try{var $groupBoosts=document.getElementsByClassName('btn-group-boost')
for(var i=0;i<$groupBoosts.length;i++){var $groupBoost=$groupBoosts[i]
$groupBoost.onclick=function(e){e.preventDefault()
request('POST','/api/groups/boost',function(r){for(var ii=0;ii<$groupBoosts.length;ii++){var $gb=$groupBoosts[ii]
$gb.onclick=function(){}
$gb.classList.add('boosted')
$gb.classList.add('disabled')}},{group_id:$groupBoost.dataset.group_id})}}}catch(e){}
try{document.getElementById('btn-group-edit').onclick=function(e){e.preventDefault()
document.getElementById('group-edit-form').submit()}}catch(e){}
try{document.getElementById('random-person').onclick=function(e){e.preventDefault()
document.getElementById('random-form').submit()}}catch(e){}})()})()