<?php

namespace common\models\db\model;

use common\models\db\table\WebsiteNews as tbl_WebsiteNews;
use yii\base\Model;
use yii\data\Pagination;

class WebsiteNews extends Model
{
    public $_table;

    public function __construct(array $config = [])
    {
        $this->_table = new tbl_WebsiteNews();
    }

    public function save($data)
    {
        $this->_table->setAttributes($data);
        if ($this->_table->save()) {
            return $this->_table->id;
        }
    }

    public function getAllNews($isActive = null, $excludeExternal = false, $topNews = false)
    {
        $select = tbl_WebsiteNews::find()->asArray(true)
            ->orderBy(tbl_WebsiteNews::START_DATE . ' DESC');
        if (!is_null($isActive)) {
            $select->where(tbl_WebsiteNews::ID . '= 1')
                ->where(tbl_WebsiteNews::START_DATE . ' >= DATEADD(YEAR, -5, GETDATE())');
        }
        if ($excludeExternal) {
            $select->where(tbl_WebsiteNews::IS_EXTERNAL . '= 0');
        }
        if ($topNews) {
            $select->limit(4);
        }
        return $select->all();
    }

    public function getAllNewsPaged($isActive = null, $excludeExternal = false)
    {
        $select = tbl_WebsiteNews::find()->asArray(true)
            ->orderBy(tbl_WebsiteNews::START_DATE . ' DESC');
        if (!is_null($isActive)) {
            $select->where(tbl_WebsiteNews::ID . '= 1')
                ->where(tbl_WebsiteNews::START_DATE . ' >= DATEADD(YEAR, -5, GETDATE())');
        }
        if ($excludeExternal) {
            $select->where(tbl_WebsiteNews::IS_EXTERNAL . '= 0');
        }
        $count = $select->count();
        $pagination = new Pagination(['totalCount' => $count, 'defaultPageSize'=>8]);
        $articles = $select->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return [$articles,$pagination];
    }

    public function getNewsById($id)
    {
        $select = tbl_WebsiteNews::find()->asArray(true)
            ->where(tbl_WebsiteNews::ID . '= :id')
            ->addParams([':id' => $id])
            ->one();
        return $select;
    }

//    public function getAllNews($isActive = null, $excludeExternal = false, $topNews = false)
//    {
//        $select = $this->_table->select()
//            ->order(Core_Db_Table_WebsiteNews::START_DATE . ' DESC');
//
//        if (!is_null($isActive)) {
//            $select->where(Core_Db_Table_WebsiteNews::IS_ACTIVE . ' = ?', 1)
//                ->where(Core_Db_Table_WebsiteNews::START_DATE .' >= ?', new Zend_Db_Expr('DATEADD(YEAR, -5, GETDATE())'));
//        }
//
//        if ($excludeExternal) {
//            $select->where(Core_Db_Table_WebsiteNews::IS_EXTERNAL . ' = ?', 0);
//        }
//
//        if ($topNews) {
//            $select->limit(5);
//        }
//
//        //Zend_Registry::get('logger')->info($select->__toString());
//        try
//        {
//            return $this->_table->getAdapter()->fetchAll($select);
//        }
//        catch (Exception $e)
//        {
//            Zend_Registry::get('logger')->err($e);
//        }
//    }
//
//    public function getNewsById($id)
//    {
//        $select = $this->_table->select()
//            ->where(Core_Db_Table_WebsiteNews::ID .' = ?', $id);
//
//        //Zend_Registry::get('logger')->info($select->__toString());
//        try
//        {
//            return $this->_table->getAdapter()->fetchRow($select);
//        }
//        catch (Exception $e)
//        {
//            Zend_Registry::get('logger')->err($e);
//        }
//    }
}