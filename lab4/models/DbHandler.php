<?php
interface DbHandler{
    public function connect();
    public function get_all_record_paginated($field=array(),$start=0);
    public function get_record_by_id($id,$primary_key="id");
}