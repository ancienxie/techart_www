<?php
    interface iFile
    {
        public function __construct($filePath);
		
		public function getPath(); // путь к файлу
		public function getDir();  // папка файла
		public function getName(); // имя файла
		public function getExt();  // расширение файла
		public function getSize(); // размер файла
		
		public function getText();          // получает текст файла
		public function setText($text);     // устанавливает текст файла
		public function appendText($text);  // добавляет текст в конец файла
		
		public function copy($copyPath);    // копирует файл
		public function delete();           // удаляет файл
		public function rename($newName);   // переименовывает файл
		public function replace($newPath);  // перемещает файл
    }

    class File implements iFile
    {
        private $filePath;
        public function __construct($filePath)
        {
            $this->filePath = $filePath;
        }

        public function getPath()
        {
            return $this->filePath;
        }
        public function getDir()
        {
            return dirname($this->filePath);
        }
        public function getName()
        {
            return basename($this->filePath);
            //return pathinfo($this->filePath, PATHINFO_FILENAME);
        }

        public function getExt()
        {
            return pathinfo($this->filePath, PATHINFO_EXTENSION);
        }

        public function getSize()
        {
            return filesize($this->filePath);
        }
        public function getText()
        {   
            if(file_exists($this->filePath))
            {
                return file_get_contents($this->filePath);
            }
        }
        public function setText($text)
        {
            return file_put_contents($this->filePath, $text);
        }
        public function appendText($text)
        {
            return file_put_contents($this->filePath, $text, FILE_APPEND);
        }
        public function copy($copyPath)
        { 
            return copy($this->filePath, $copyPath);
        }
        public function delete()
        {
            return unlink($this->filePath);
        }
        public function rename($newName)
        {
            $newPath = $this->getDir() . DIRECTORY_SEPARATOR . $newName;
            if (rename($this->filePath, $newPath)) {
                $this->filePath = $newPath;
                return true;
            }
            return false;
        }
        public function replace($newPath)
        {
            if (rename($this->filePath, $newPath)) 
            {
                $this->filePath = $newPath;
                return true;
            }
            return false;
        }
    }

    $file = new File("\\media\\student\\mini-drive\\php_date_file\\text\\file.txt");
?>