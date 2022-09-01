<?php

class StaticClass{
	public static function helloWorld(){
		//нельзя использовать $this так как используется не в объекте
		echo "Это статическая функция(метод) можно вызывать без объекта";
	}
}

StaticClass::helloWorld();