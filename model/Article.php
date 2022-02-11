<?php
/**
 * Article Model
 * Provides access to the "Article" table as a database table.
 *
 * @author Igram Picasa <https://github.com/igpcl>
 */
namespace Model;

class Article extends AbstractModel {
    /**
     *  This is our predefined data to use instead of SQL query
     */
    public static array $data = [
        [
            'id' => 1,
            'title' => 'No way sir!',
            'content' => 'You have no way to get in PHP sir!'
        ], [
            'id' => 2,
            'title' => 'You can try sir later!',
            'content' => 'You can try with PHP later and comeback if you could handle your MVC sir!'
        ]
    ];
}
