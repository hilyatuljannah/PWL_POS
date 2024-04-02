<?php

namespace App\Http\Controllers;

use App\DataTables\LevelDataTable;
use App\Http\Requests\StoreLevelRequest;
use App\Http\Requests\UpdateLevelRequest;
use App\Models\LevelModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LevelController extends Controller
{
    function index(LevelDataTable $dataTable)
    {
        // DB::insert('insert into m_level(level_kode, level_nama, created_at) values(?,?,?)',['cus', 'pelanggan', now()]);
       // DB::insert('insert into m_level(level_kode, level_nama, created_at)values(?, ?, ?)',['CUS', 'Pelanggan', now()]);
       // return 'Insert data baru berhasil';

      // $row = DB::update('update m_level set level_nama = ? where level_kode = ?',['Customer', 'CUS']);
      // return 'Update data berhasil. Jumlah data yang diupdate: '. $row.' baris';

     // $row = DB::delete('delete from m_level where level_kode = ?', ['CUS']);
     // return 'Delete data berhasil. Jumlah data yang dihapus : ' . $row.' baris';

     return $dataTable->render('level.index');

    }

    function create()
    {
        return view('level.create');
    }

    function store(StoreLevelRequest $request)
    {
        $validated = $request->safe()->only(['level_kode', 'level_nama']);

        LevelModel::create($validated);
        return redirect('/level');
    }

    function edit($id)
    {
        return view('level.edit', ['data' => LevelModel::find($id)]);
    }

    function update(UpdateLevelRequest $request, $id)
    {
        $validated = $request->safe()->only(['level_kode', 'level_nama']);
        LevelModel::find($id)->update($validated);

        return redirect('/level');
    }

    function destroy($id)
    {
        LevelModel::find($id)->delete();
        return redirect('/level');
    }
}
