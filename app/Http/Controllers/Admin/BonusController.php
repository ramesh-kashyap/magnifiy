<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Income;
use App\Models\User_trade;

class BonusController extends Controller
{
    public function roi_bonus(Request $request)
  {
      $limit = $request->limit ? $request->limit : paginationLimit();
      $search = $request->search;
      $from_date = $request->from_date;
      $to_date = $request->to_date;

      $notes = Income::where('remarks', 'Trading Bonus')
          ->orderBy('id', 'DESC');

      // 🔍 Text Search
      if ($search && $request->reset != "Reset") {
          $notes = $notes->where(function ($q) use ($search) {
              $q->where('comm', 'LIKE', '%' . $search . '%')
                  ->orWhere('amt', 'LIKE', '%' . $search . '%')
                  ->orWhere('user_id_fk', 'LIKE', '%' . $search . '%')
                  ->orWhere('ttime', 'LIKE', '%' . $search . '%');
          });
      }

      // 📅 Date Filter (From → To)
      if (!empty($from_date) && !empty($to_date)) {
          $notes = $notes->whereBetween('created_at', [$from_date, $to_date]);
      } elseif (!empty($from_date)) {
          $notes = $notes->whereDate('created_at', '>=', $from_date);
      } elseif (!empty($to_date)) {
          $notes = $notes->whereDate('created_at', '<=', $to_date);
      }

      $notes = $notes->paginate($limit)->appends([
          'limit' => $limit,
          'search' => $search,
          'from_date' => $from_date,
          'to_date' => $to_date,
      ]);

      $this->data['direct_incomes'] = $notes;
      $this->data['search'] = $search;
      $this->data['from_date'] = $from_date;
      $this->data['to_date'] = $to_date;
      $this->data['page'] = 'admin.bonus.roi-bonus';
      return $this->admin_dashboard();
  }

    public function level_bonus(Request $request)
    {


           $limit = $request->limit ? $request->limit :  paginationLimit();
            $status = $request->status ? $request->status : null;
            $search = $request->search ? $request->search : null;
            $notes = Income::where('remarks','Generation Income')->orderBy('id', 'DESC');
           if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('rname', 'LIKE', '%' . $search . '%')
              ->orWhere('ttime', 'LIKE', '%' . $search . '%')
              ->orWhere('user_id_fk', 'LIKE', '%' . $search . '%')
              ->orWhere('level', 'LIKE', '%' . $search . '%')
              ->orWhere('amt', 'LIKE', '%' . $search . '%')
              ->orWhere('comm', 'LIKE', '%' . $search . '%');
            });

      }

            $notes = $notes->paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);

                $this->data['level_incomes'] =  $notes;
                $this->data['search'] = $search;
                $this->data['page'] = 'admin.bonus.level-bonus';
                return $this->admin_dashboard();
    }


  public function activities_bonus(Request $request)
    {


           $limit = $request->limit ? $request->limit :  paginationLimit();
            $status = $request->status ? $request->status : null;
            $search = $request->search ? $request->search : null;
            $notes = Income::where('remarks','Royalty Bonus')->orderBy('id', 'DESC');
           if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('rname', 'LIKE', '%' . $search . '%')
              ->orWhere('ttime', 'LIKE', '%' . $search . '%')
              ->orWhere('user_id_fk', 'LIKE', '%' . $search . '%')
              ->orWhere('level', 'LIKE', '%' . $search . '%')
              ->orWhere('amt', 'LIKE', '%' . $search . '%')
              ->orWhere('comm', 'LIKE', '%' . $search . '%');
            });

      }

            $notes = $notes->paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);

                $this->data['level_incomes'] =  $notes;
                $this->data['search'] = $search;
                $this->data['page'] = 'admin.bonus.royalty-bonus';
                return $this->admin_dashboard();
    }



    public function booster_bonus(Request $request)
    {


           $limit = $request->limit ? $request->limit :  paginationLimit();
            $status = $request->status ? $request->status : null;
            $search = $request->search ? $request->search : null;
            $notes = Income::where('remarks','Daily Incentive')->orderBy('id', 'DESC');
           if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('rname', 'LIKE', '%' . $search . '%')
              ->orWhere('ttime', 'LIKE', '%' . $search . '%')
              ->orWhere('user_id_fk', 'LIKE', '%' . $search . '%')
              ->orWhere('level', 'LIKE', '%' . $search . '%')
              ->orWhere('amt', 'LIKE', '%' . $search . '%')
              ->orWhere('comm', 'LIKE', '%' . $search . '%');
            });

      }

            $notes = $notes->paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);

                $this->data['level_incomes'] =  $notes;
                $this->data['search'] = $search;
                $this->data['page'] = 'admin.bonus.booster-bonus';
                return $this->admin_dashboard();
    }



    public function club_bonus(Request $request)
    {


           $limit = $request->limit ? $request->limit :  paginationLimit();
            $status = $request->status ? $request->status : null;
            $search = $request->search ? $request->search : null;
            $notes = Income::where('remarks','Level Bonus')->orderBy('id', 'DESC');
           if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('rname', 'LIKE', '%' . $search . '%')
              ->orWhere('ttime', 'LIKE', '%' . $search . '%')
              ->orWhere('user_id_fk', 'LIKE', '%' . $search . '%')
              ->orWhere('level', 'LIKE', '%' . $search . '%')
              ->orWhere('amt', 'LIKE', '%' . $search . '%')
              ->orWhere('comm', 'LIKE', '%' . $search . '%');
            });

      }

            $notes = $notes->paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);

                $this->data['level_incomes'] =  $notes;
                $this->data['search'] = $search;
                $this->data['page'] = 'admin.bonus.club-bonus';
                return $this->admin_dashboard();
    }



    public function reward_bonus(Request $request)
    {


           $limit = $request->limit ? $request->limit :  paginationLimit();
            $status = $request->status ? $request->status : null;
            $search = $request->search ? $request->search : null;
            $notes = Income::where('remarks','Matching Bonus')->orderBy('id', 'DESC');
           if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('rname', 'LIKE', '%' . $search . '%')
              ->orWhere('ttime', 'LIKE', '%' . $search . '%')
              ->orWhere('user_id_fk', 'LIKE', '%' . $search . '%')
              ->orWhere('level', 'LIKE', '%' . $search . '%')
              ->orWhere('amt', 'LIKE', '%' . $search . '%')
              ->orWhere('comm', 'LIKE', '%' . $search . '%');
            });

      }

            $notes = $notes->paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);

                $this->data['level_incomes'] =  $notes;
                $this->data['search'] = $search;
                $this->data['page'] = 'admin.bonus.reward-bonus';
                return $this->admin_dashboard();
    }


     public function binary_bonus(Request $request)
    {


           $limit = $request->limit ? $request->limit :  paginationLimit();
            $status = $request->status ? $request->status : null;
            $search = $request->search ? $request->search : null;
            $notes = Income::where('remarks','Binary Bonus')->orderBy('id', 'DESC');
           if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('rname', 'LIKE', '%' . $search . '%')
              ->orWhere('ttime', 'LIKE', '%' . $search . '%')
              ->orWhere('user_id_fk', 'LIKE', '%' . $search . '%')
              ->orWhere('level', 'LIKE', '%' . $search . '%')
              ->orWhere('amt', 'LIKE', '%' . $search . '%')
              ->orWhere('comm', 'LIKE', '%' . $search . '%');
            });

      }

            $notes = $notes->paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);

                $this->data['level_incomes'] =  $notes;
                $this->data['search'] = $search;
                $this->data['page'] = 'admin.bonus.binary-bonus';
                return $this->admin_dashboard();
    }

}
