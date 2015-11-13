<?php

/**
 * This simple package helps read and open files
 * and convert it into string
 * @author Surajudeen Akande
 * @email surajudeen.akande@andela.com
 */

class fileOpen
{
    /*
     @var string for pointer for opening files
     */
    private $file;

    /*
    @var string name of file to be opened
     */
    private $filename;

    /**
     * to be called when creating new object
     * @param string $filename
     */
    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    /**
     * open the file to be read
     * @return resource
     */
    public function openFile()
    {
        if(!file_exists($this->filename)) {
          die("File not found in the specified directory");
        } else {
          $this->file=fopen($this->filename,"r");
        }
        return $this->file;
    }

    /**
     * Gets the size of file in bytes
     * @return int
     */
    public function getFileSize()
    {
        $fileSize = filesize($this->filename);
        return $fileSize;
    }

    /**
     * reads file already opened
     * @return string
     */
    public function readFile()
    {
        $filetext = fread($this->file, self::getFileSize());
        echo "$filetext";
        fclose($this->file);
    }
}

