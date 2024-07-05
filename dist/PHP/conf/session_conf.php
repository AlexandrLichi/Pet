<?php

/**
 * Где хранить сессию
 */

 define("SESSION", env("SESION", "file"));
/**
 * Файл сохранения сесии
 */
define("SESSION_FOLDER", env("SESION_FOLDER", "session"));
?>