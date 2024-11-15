<div class="flex justify-between items-start p-4 border-b border-gray-300 dark:border-gray-700">
    <h2 class="text-md font-semibold text-gray-900 dark:text-white">{!! $service->name !!}</h2>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mx-5">
    
    <!-- คอลัมน์ซ้าย: รูปภาพประกอบและรายละเอียด -->
    <div class="space-y-4">
        <!-- รูปภาพ -->
        <div class="flex justify-center mb-4 mt-4">
            <img src="{{ url($service->image_path) }}" alt="ประกอบการให้บริการแรงงานต่างด้าว" class="w-full h-auto rounded-lg shadow-md">
        </div>

        <!-- ข้อมูลรายละเอียด -->
        <div>
            <h3 class="text-sm font-semibold text-gray-700 dark:text-gray-300">รายละเอียดพอร์มงาน:</h3>
            <p class="text-sm text-gray-600 dark:text-gray-400 mt-2">
                {{$service->details}}
            </p>

            <div class="grid grid-cols-2 gap-4 mt-4">
                <div>
                    <h4 class="text-sm  font-medium text-gray-700 dark:text-gray-300">ระยะเวลาดำเนินการ:</h4>
                    <ul class="text-sm  list-disc pl-5 text-gray-600 dark:text-gray-400 space-y-1">
                        {!! htmlspecialchars_decode($service->period) !!}
                    </ul>
                </div>
                <div>
                    <h4 class="text-sm font-medium text-gray-700 dark:text-gray-300">สัญชาติ:</h4>
                    <p class="text-sm  text-gray-600 dark:text-gray-400">
                        {!! htmlspecialchars_decode($service->nationality) !!}
                    </p>
                </div>
            </div>
            
            <!-- ปุ่มกรอกข้อมูลเบื้องต้น -->
            <div class="pt-4">
                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-full text-sm px-5 py-2.5">กรอกข้อมูลเบื้องต้น</button>
            </div>
            
            <!-- ข้อมูลเพิ่มเติม -->
            <p class="text-sm text-gray-500 dark:text-gray-400 mt-4 mb-2">
                โทรสอบถามข้อมูลเพิ่มเติม: TEL : 0-2101-2814 Email : importer168@gmail.com
            </p>
        </div>
    </div>

    <!-- คอลัมน์ขวา: ขั้นตอนการดำเนินการและเอกสาร -->
    <div class="space-y-6 overflow-y-auto p-4" style="height: 600px;" style="font-size: 5px">
        {!! htmlspecialchars_decode($service->content) !!}
    </div>
</div>
