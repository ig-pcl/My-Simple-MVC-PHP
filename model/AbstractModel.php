<?php
/**
 * AbstractModel Class
 * A generic representation of a database table.
 *
 * The table used are stored in the our model
 * We can change it to return data from
 * a real MySQL or SQLite.
 *
 * @author Igram Picasa <https://github.com/igpcl>
 */

namespace Model;

abstract class AbstractModel {
    /**
     *
     * @param string $key
     * @param mixed $value
     * @return bool|object
     */
    public static function findByColumn(string $key, mixed $value) : bool|object {
        // return back our data
        foreach (static::$data as $row) {
            // for that key value
            if ($row[$key] == $value) {
                // Create a new instance of the actual class
                $instance = new static;

                // Hydrate the instance
                foreach ($row as $key_ => $value_) {
                    $instance->{$key_} = $value_;
                }

                // just return it
                return $instance;
            }
        }
        return false;
    }

    /**
     * This method persists current instance
     */
    public function persist() : void {
        foreach (static::$data as & $row) {
            if ($row['id'] == $this->id) {
                foreach ($this as $key => $value) {
                    $row[$key] = $value;
                }
                break;
            }
        }
    }
}
