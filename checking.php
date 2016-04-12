/**
 * mailValid - check if this is correct the email Adress or not and check if found and remove any hidden character
 * @param  [string] $email
 * @return [mxid]   return false if not Email Correct and return null if it's Empty and return email if it's Valid
 */
function mailValid($email)
{
    $email = filter_var( strtolower( trim($email) ), FILTER_SANITIZE_STRING,FILTER_FLAG_NO_ENCODE_QUOTES);
    if ( !empty($email) )
    {
        preg_match( '/[a-z0-9._-]+@[a-z0-9._-]+/u', utf8_encode($email), $emailReturn );
        if((filter_var($emailReturn[0], FILTER_VALIDATE_EMAIL)) !== false)
        {
            return $emailReturn[0];
        }
        return false;
    }
    return null;
}
  
