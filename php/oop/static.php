<?php

class StaticClass{
	public static function helloWorld($customVar){
		//нельзя использовать $this так как используется не в объекте
		echo "Это статическая функция(метод) можно вызывать без объекта: " .$customVar;
	}
}

StaticClass::helloWorld('$customVar text');