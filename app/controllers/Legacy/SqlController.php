<?php
namespace Legacy;

use Illuminate\Routing\Controllers\Controller;
use Input;
use View;

class SqlController extends Controller
{
    public function getIndex() {
        return View::make('legacy.sql');
    }

    public function postIndex() {
        $parser = new CreateStatementParser(Input::get('statement'));
        $parser->createMigration();
        print "<pre>" . e($parser->getMigrationCode());
    }
}