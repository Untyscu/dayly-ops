echo 'wordpress' | docker secret create db_name -
echo 'default' | docker secret create db_user -
echo 'password' | docker secret create db_password -
echo 'root_password' | docker secret create db_root_password -
echo 'wp_mysql' | docker secret create db_host -
echo '^/x@BoY[1W:.)6G|`t^vmEy}+:380{6;D|pNN2C@F;{O]zM%j[@|mi7Kiy^Bk-ac' | docker secret create auth_key -
echo '!Y;TJ]Ve[E1Mp3NpH 97TER:[!Qe@bW  >4y:YDweN=k_$6VKzt(]V,h9$SC.~<M' | docker secret create nonce_key -