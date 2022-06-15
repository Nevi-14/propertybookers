<?php
namespace App\Services;

use Exception;
use InvalidArgumentException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use App\Repositories\InstallRepository;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector;

class InstallService
{
    /**
     * @var $installService
     */
    protected $installService;

    /**
     * InstallService constructor.
     *
     * @param InstallRepository $installRepository
     */
    public function __construct(){
    
    }



    public function deleteById($id)
    {
        DB::beginTransaction();
        try {
            $model = $this->installRepository->delete($id);
        } catch (Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());
            throw new InvalidArgumentException(__('Unable to delete model data'));
        }
        DB::commit();
        return $model;
    }

    /**
     * Get all model.
     *
     * @return String
     */
    public function getAll()
    {
        return $this->installRepository->getAll();
    }

    /**
     * Get model by id.
     *
     * @param $id
     * @return String
     */
    public function getById($id)
    {
        return $this->installRepository->getById($id);
    }

    /**
     * Update model data
     * Store to DB if there are no errors.
     *
     * @param array $data
     * @return String
     */
    public function updateModel($data, $id)
    {
        $validator = Validator::make($data, [
            'title' => 'bail|min:2',
            'description' => 'bail|max:255'
        ]);

        if ($validator->fails()) {
            throw new InvalidArgumentException($validator->errors()->first());
        }

        DB::beginTransaction();

        try {
            $model = $this->installRepository->update($data, $id);

        } catch (Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());

            throw new InvalidArgumentException(__('Unable to update model data'));
        }

        DB::commit();

        return $model;

    }

    /**
     * Validate model data.
     * Store to DB if there are no errors.
     *
     * @param array $data
     * @return String
     */
    public function saveModelData($data)
    {
        $validator = Validator::make($data, [
            'title' => 'required',
            'description' => 'required'
        ]);
        if ($validator->fails()) {
            throw new InvalidArgumentException($validator->errors()->first());
        }
        $result = $this->installRepository->save($data);
        return $result;
    }

    public static function callAPI($code){
        $api_url = "https://api.envato.com/v3/market/author/sale?code=".$code;
        $response = Http::withHeaders([
            'Authorization' => 'Bearer lPpM2ZOxsrU44Td7USmul8cHpvIg3WEi'
        ])->get($api_url);

        
        return [
            'status_code'=>json_decode($response->getStatusCode()),
            'body'=>json_decode($response->getBody())
        ];

    }

}
?>
