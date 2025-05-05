<div className="p-4 max-w-md mx-auto">
    {/* Stats Section */}
    <div className="grid grid-cols-2 gap-4">
      <div className="p-4 bg-gray-100 rounded-lg text-center">
        <p className="text-2xl font-bold">11</p>
        <p className="text-sm text-gray-500">Courses completed</p>
      </div>
      <div className="p-4 bg-gray-100 rounded-lg text-center">
        <p className="text-2xl font-bold">4</p>
        <p className="text-sm text-gray-500">Courses in progress</p>
      </div>
    </div>

    {/* Course List */}
    <div className="mt-4">
      {[...Array(5)].map((_, i) => (
        <div key={i} className="p-4 bg-white shadow rounded-lg flex gap-3 mb-3">
          <div className="w-12 h-12 bg-gray-200 flex items-center justify-center rounded-lg">
            📖
          </div>
          <div>
            <h3 className="font-bold">Course {i + 1}</h3>
            <p className="text-sm text-gray-500">Watch videos and learn about Course {i + 1}!</p>
          </div>
        </div>
      ))}
    </div>
  </div>
