
function validate()
{
	if( document.CHAT.entmsg.value == "" )
	{
		document.CHAT.entmsg.focus() ;
		return false;
	}
	return (true);
}